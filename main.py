from flask import Flask, json, request
from pymongo import MongoClient
from datetime import datetime
import subprocess


USER = "grupo36"
PASS = "grupo36"
DATABASE = "grupo36"

URL = f"mongodb://{USER}:{PASS}@gray.ing.puc.cl/{DATABASE}?authSource=admin"
client = MongoClient(URL)

# revisar esto
USER_KEYS = ['uid', 'name', 'description', 'age']
MESSAGE_KEYS = ['date', 'lat', 'long', 'message', 'receptant', 'sender']

# Base de datos del grupo
db = client["grupo36"]

# Seleccionamos la collección de usuarios
usuarios = db.usuarios

# Seleccionamos la collección de usuarios
mensajes = db.mensajes

# Iniciamos la aplicación de flask
app = Flask(__name__)


@app.route("/")
def home():

    
    subprocess.call("php mapa.php")    

    '''
    Página de inicio
    '''

    return """<h1>Entrega 5 (grupos 36 y 85) :)</h1>
    
        """


@ app.route("/users")
def get_users():
    '''
    Entrega todos los atributos de todos los usuarios en la base de datos.
    '''
    users = list(usuarios.find({}, {"_id": 0}))

    return json.jsonify(users)


@ app.route("/users/<int:uid>")
def get_user(uid):
    '''
    Al recibir el id de un mensaje, obtenga toda la información asociada a ese mensaje
    '''
    uids = list(usuarios.find({}, {"_id": 0, "uid": 1}))

    if str(uid).isnumeric():
        id_existe = False
        for user_id in uids:
            if int(user_id['uid']) == int(uid):
                id_existe = True
    else:
        return json.jsonify({"Unsuccesful": "not numeric id"})

    if id_existe:
        user = list(usuarios.find({"uid": uid}, {"_id": 0}))
        mensajes_user = list(mensajes.find(
            {"sender": uid}, {"_id": 0}))

        result = user + mensajes_user

        return json.jsonify(result)
    else:
        return json.jsonify({"unsuccesful": "User with id {} does not exist".format(uid)})


@ app.route("/users", methods=['POST'])
def create_user():
    '''
    Crea un nuevo usuario en la base de datos
    Se  necesitan todos los atributos de model, a excepcion de _id
    '''

    data = {key: request.json[key] for key in USER_KEYS}

    # El valor de result nos puede ayudar a revisar
    # si el usuario fue insertado con éxito
    result = usuarios.insert_one(data)

    return json.jsonify({"success": True})


@ app.route("/users", methods=['DELETE'])
def delete_user():
    '''
    Elimina el usuario de id entregada
    {"uid": 999}
    '''
    uid = request.json['uid']

    uids = list(usuarios.find({}, {"_id": 0, "uid": 1}))

    id_existe = False
    if str(uid).isnumeric():
        for user_id in uids:
            if int(user_id['uid']) == int(uid):
                id_existe = True
    else:
        return json.jsonify({"Unsuccesful": "not numeric id"})

    if id_existe:
        usuarios.remove({"uid": uid})
        return json.jsonify({"success": True})
    else:
        return json.jsonify({"unsuccesful": "User with id {} does not exist".format(uid)})


@ app.route("/messages")
def get_messages():
    '''
    entregue todos los atributos de todos los mensajes en la base de datos.
    '''

    id1 = request.args.get('id1', None)
    id2 = request.args.get('id2', None)

    uids = list(usuarios.find({}, {"_id": 0, "uid": 1}))
    id1_existe = False
    if str(id1).isnumeric():
        for user_id in uids:
            if int(user_id['uid']) == int(id1):
                id1_existe = True
    elif id1 != None:
        return json.jsonify({"Unsuccesful": "not numeric id"})
    else:
        if id1 == None:
            messages = list(mensajes.find({}, {"_id": 0}))
        else:
            messages1 = list(mensajes.find(
                {"$and": [{"sender": int(id1)}, {"receptant": int(id2)}]}, {"_id": 0}))
            messages2 = list(mensajes.find(
                {"$and": [{"sender": int(id2)}, {"receptant": int(id1)}]}, {"_id": 0}))
            messages = messages1 + messages2
        return json.jsonify(messages)

    if str(id2).isnumeric():
        id2_existe = False
        for user_id in uids:
            if int(user_id['uid']) == int(id2):
                id2_existe = True
    elif id2 != None:
        return json.jsonify({"Unsuccesful": "not numeric id"})

    print("id1", id1)
    print("id2", id2)

    if id1_existe:
        if id2_existe:
            if id1 == None:
                messages = list(mensajes.find({}, {"_id": 0}))
            else:
                messages1 = list(mensajes.find(
                    {"$and": [{"sender": int(id1)}, {"receptant": int(id2)}]}, {"_id": 0}))
                messages2 = list(mensajes.find(
                    {"$and": [{"sender": int(id2)}, {"receptant": int(id1)}]}, {"_id": 0}))
                messages = messages1 + messages2
                if not messages:
                    return json.jsonify({"Unsuccesful": "There are no messages between these users"})
            return json.jsonify(messages)
        else:
            return json.jsonify({"Unsuccesful": "User with id {} does not exist".format(id2)})
    else:
        return json.jsonify({"Unsuccesful": "User with id {} does not exist".format(id1)})


@ app.route("/messages/<int:mid>")
def get_message(mid):
    '''
    que al recibir el id de un mensaje, obtenga toda la información asociada a ese mensaje. El id es un identificador numérico entero, distinto al id alfanumérico que utiliza Mongo
    '''
    mids = list(mensajes.find({}, {"_id": 0, "mid": 1}))
    id_existe = False
    if str(mid).isnumeric():
        for msg_id in mids:
            if int(msg_id['mid']) == int(mid):
                id_existe = True
    else:
        return json.jsonify({"Unsuccesful": "not numeric id"})

    if id_existe:
        message = list(mensajes.find({"mid": mid}, {"_id": 0}))
        return json.jsonify(message)
    else:
        return json.jsonify({"Unsuccesful": "Message with id {} does not exist".format(mid)})


@ app.route("/messages", methods=['POST'])
def post_messages():
    '''
    entregue todos los atributos de todos los mensajes en la base de datos.
    '''
    # consultamos todos los mid de la BDD
    mids = list(mensajes.find({}, {"_id": 0, "mid": 1}))
    # inicializamos un contador
    contador = 0
    # recorremos toda la lista de mids
    for mid in mids:
        valor = mid['mid']
        # si el contador es menor al mid, actualizamos el contador
        if contador < valor:
            contador = valor

    # dejamos al contador como el nuevo mid más alto
    contador += 1
    # creamos un dict a partir de los datos entregados en la request de la consulta
    try:
        llaves_request = request.json.keys()
    except:
        return json.jsonify({"unsuccesful": "400 bad request"})
    # revisamos que estén todas las llaves del request
    for llave in MESSAGE_KEYS:
        if llave not in llaves_request:
            return json.jsonify({"unsuccesful": "parameter '{}' missing".format(llave)})
    # revisamos que no sobren llaves del request
    for key in llaves_request:
        if key not in MESSAGE_KEYS:
            return json.jsonify({"unsuccesful": "parameter '{}' not valid".format(key)})

    # consultamos los ids de los usuarios
    uids = list(usuarios.find({}, {"_id": 0, "uid": 1}))

    sender_id = request.json["sender"]
    receptant_id = request.json["receptant"]

    # si ids de sender y receptant existen
    sender_esta = False
    for uid in uids:
        if uid['uid'] == sender_id:
            sender_esta = True

    receptant_esta = False
    for uid in uids:
        if uid['uid'] == receptant_id:
            receptant_esta = True

    # si id de sender o receptant no existe, se da mensaje de error
    if not sender_esta:
        return json.jsonify({"unsuccesful": "sender with id {} does not exist or is not valid".format(sender_id)})

    if not receptant_esta:
        return json.jsonify({"unsuccesful": "receptant with id {} does not exist or is not valid".format(receptant_id)})

    msg = request.json["message"]
    if len(msg) == 0:
        return json.jsonify({"unsuccesful": "Message is empty"})

    lat = request.json["lat"]
    lon = request.json["long"]
    if type(lat) != float:
        return json.jsonify({"unsuccesful": "latitude invalid"})

    if type(lon) != float:
        return json.jsonify({"unsuccesful": "longitude invalid"})

    # para revistar que la fecha esté correcta
    fecha = request.json["date"]
    try:
        datetime.strptime(fecha, '%Y-%m-%d')
    except ValueError:
        return json.jsonify({"unsuccesful": "date not valid"})

    data = {key: request.json[key] for key in MESSAGE_KEYS}

    # ACA REVISAMOS TODOS LOS DATOS

    # agregamos el mid al dict
    data["mid"] = contador
    data["dummy"] = "x"

    # insertamos el ditc en la base de datos
    result = mensajes.insert_one(data)
    return json.jsonify({"success": True})


@ app.route("/message/<int:mid>", methods=['DELETE'])
def delete_message(mid):
    '''
    Elimina el mensaje de id entregado
    '''
    # message = list(mensajes.find({"mid": mid}, {"_id": 0}))
    # mid = request.json['mid']
    mids = list(mensajes.find({}, {"_id": 0, "mid": 1}))
    id_existe = False
    if str(mid).isnumeric():
        for msg_id in mids:
            if int(msg_id['mid']) == int(mid):
                id_existe = True
    else:
        return json.jsonify({"Unsuccesful": "not numeric id"})

    if id_existe:
        mensajes.remove({"mid": mid})
        return json.jsonify({"success": True})
    else:
        return json.jsonify({"Unsuccesful": "Message with id {} does not exist".format(mid)})


@ app.route("/text-search")
def text_search():

    message = ""

    try:
        requestx = request.get_json()
        if requestx == {}:
            message = list(mensajes.find({}, {"_id": 0}))

        elif "forbidden" in requestx and "desired" not in requestx and "required" not in requestx:
            str_forbidden = "x"
            for elem in requestx["forbidden"]:
                nuevo = " -" + elem
                str_forbidden = str_forbidden + nuevo

            if "userId" in requestx:
                print(str_forbidden)
                message = list(mensajes.find({"$and": [{"$text": {"$search": str_forbidden}}, {
                    "sender": requestx["userId"]}]}, {"_id": 0}))
            else:
                message = list(mensajes.find(
                    {"$text": {"$search": str_forbidden}}, {"_id": 0}))

        else:

            deseado = ""
            prohibido = ""
            requerido = ""

            if "desired" in requestx:
                desired = requestx["desired"]
                deseado = ""
                for elem in desired:
                    deseado = deseado + " " + elem

            if "required" in requestx:
                required = requestx["required"]
                requerido = ""
                for elem in required:
                    requerido = requerido + ' ' + '"' + elem + '"'

            if "forbidden" in requestx:
                forbidden = requestx["forbidden"]
                prohibido = ""
                for elem in forbidden:
                    prohibido = prohibido + " " + "-" + elem

            consulta = str(deseado + requerido + prohibido)

            users = list(usuarios.find({}, {"_id": 0, "uid": 1}))
            user_exist = False

            if "userId" in requestx:
                if str(requestx["userId"]).isnumeric():
                    for user in users:
                        if int(user['uid']) == int(requestx["userId"]):
                            user_exist = True
                    if user_exist:
                        if consulta == "":
                            message = list(mensajes.find(
                                {"sender": requestx["userId"]}, {"_id": 0}))
                        else:
                            message = list(mensajes.find({"$and": [{"$text": {"$search": consulta}}, {
                                "sender": requestx["userId"]}]}, {"_id": 0}))
                    else:
                        message = [
                            {"Unsuccesful": "user with id {} does not exist".format(requestx["userId"])}]
                else:
                    message = [{"Unsuccesful": "user is not an integer."}]

            else:
                if consulta == "":
                    message = list(mensajes.find({}, {"_id": 0}))
                else:
                    message = list(mensajes.find(
                        {"$text": {"$search": consulta}}, {"_id": 0}))

    except:
        message = list(mensajes.find({}, {"_id": 0}))
    finally:
        return json.jsonify(message)


if __name__ == "__main__":
    app.run(threaded=True, port=5000)
    #app.run(debug=True)

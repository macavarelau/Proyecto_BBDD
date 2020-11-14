from flask import Flask, json, request
from pymongo import MongoClient


USER = "grupo36"
PASS = "grupo36"
DATABASE = "grupo36"

URL = f"mongodb://{USER}:{PASS}@gray.ing.puc.cl/{DATABASE}?authSource=admin"
client = MongoClient(URL)

# revisar esto
USER_KEYS = ['uid', 'name', 'description', 'age']

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
    '''
    Página de inicio
    '''
    return "<h1>¡Hola!</h1><h2>Bienvenido a SuperAPI</h2>"


@app.route("/users")
def get_users():
    '''
    Entrega todos los atributos de todos los usuarios en la base de datos.
    '''
    users = list(usuarios.find({}, {"_id": 0}))

    return json.jsonify(users)


@app.route("/users/<int:uid>")
def get_user(uid):
    '''
    Al recibir el id de un mensaje, obtenga toda la información asociada a ese mensaje
    '''
    user = list(usuarios.find({"uid": uid}, {"_id": 0}))
    mensajes_user = list(mensajes.find(
        {"sender": uid}, {"_id": 0}))

    result = user + mensajes_user

    return json.jsonify(result)


@app.route("/users", methods=['POST'])
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


@app.route("/users", methods=['DELETE'])
def delete_user():
    '''
    Elimina el usuario de id entregada
    '''
    uid = request.json['uid']
    usuarios.remove({"uid": uid})
    return json.jsonify({"success": True})


@app.route("/messages")
def get_messages():
    '''
    entregue todos los atributos de todos los mensajes en la base de datos.

    '''
    id1 = request.args.get('id1', None)
    id2 = request.args.get('id2', None)

    if id1 == None:
        messages = list(mensajes.find({}, {"_id": 0}))

    else:
        messages1 = list(mensajes.find(
            {"$and": [{"sender": int(id1)}, {"receptant": int(id2)}]}, {"_id": 0}))
        messages2 = list(mensajes.find(
            {"$and": [{"sender": int(id2)}, {"receptant": int(id1)}]}, {"_id": 0}))
        messages = messages1 + messages2

    return json.jsonify(messages)


@app.route("/messages/<int:mid>")
def get_message(mid):
    '''
    que al recibir el id de un mensaje, obtenga toda la información asociada a ese mensaje. El id es un identificador numérico entero, distinto al id alfanumérico que utiliza Mongo
    '''
    message = list(mensajes.find({"mid": mid}, {"_id": 0}))

    return json.jsonify(message)

@app.route("/text-search")
def text_search():

    requestx = request.get_json()
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
            requerido = requerido + ' ' + '\\"' + elem + '\\"'

    if "forbidden" in requestx:
        forbidden = requestx["forbidden"]
        prohibido = ""
        for elem in forbidden:
            prohibido = prohibido + " " + "-" + elem

    consulta = '"' + deseado + " " + requerido + " " + prohibido + '"'

    #return consulta

    if "userId" in requestx:
        message = list(mensajes.find({"$text": {"$search": consulta}, "uid": requestx["userId"]}, {"_id":0}))
    else:
        message = list(mensajes.find({"$text": {"$search": consulta}}, {"_id":0}))

    return json.jsonify(message)


    


if __name__ == "__main__":
    app.run(debug=True)

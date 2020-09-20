with open('buques.csv', 'r', encoding='utf-8') as buques_file:
    lista_buques = buques_file.readlines()
    print(lista_buques)

nueva_lisat_buques = []

for linea in lista_buques:
    linea = linea.strip('\n')
    campos = linea.split(',')
    nueva_lisat_buques.append(campos)
    
# hacemos la lista de personal priomero
lista_capitanes = []

for instanica in nueva_lisat_buques:
    lista_capitanes.append(instanica[9])


with open('personal_buque.csv', 'r', encoding='utf-8') as pb_file:
    lista_personal = pb_file.readlines()

nueva_lisat_personal = []

for linea in lista_personal:
    linea = linea.strip('\n')
    campos = linea.split(',')
    nueva_lisat_personal.append(campos)

dict_n_personal = {}

with open('nuevo_personal.csv', 'w', encoding='utf-8') as np:
    for instanica in nueva_lisat_personal:
        np.write(instanica[0])
        np.write(',')
        np.write(instanica[1])
        np.write(',')
        np.write(instanica[4])
        np.write(',')
        if instanica[0] in lista_capitanes:
            np.write('capitan')
        else:
            np.write('marinero')
        np.write(',')
        np.write(instanica[5])
        np.write(',')
        np.write(instanica[2])
        np.write(',')
        np.write(instanica[3])
        np.write('\n')

        if instanica[6] in dict_n_personal.keys():
            dict_n_personal[instanica[6]] += 1
        else:
            dict_n_personal[instanica[6]] = 1


with open('solo_buques.csv', 'w', encoding='utf-8') as nbf:
    for instanica in nueva_lisat_buques:
        nbf.write(instanica[0])
        nbf.write(',')
        nbf.write(instanica[1])
        nbf.write(',')
        nbf.write(instanica[2])
        nbf.write(',')
        nbf.write(instanica[3])
        nbf.write(',')
        nbf.write(instanica[4])
        #nbf.write(',')
        #nbf.write(str(dict_n_personal[instanica[6]]))
        nbf.write('\n')


lista_nombres = []
dict_nombres = {}

contador = -1

with open('solo_navieras.csv', 'w', encoding='utf-8') as sn:
    for instanica in nueva_lisat_buques:
        #if not nueva_lisat_buques.index(instanica) == 0:
        if not instanica[10] in lista_nombres:
            lista_nombres.append(instanica[10])
            dict_nombres[instanica[10]] = str(contador)
            sn.write(str(contador))
            contador += 1
            sn.write(',')
            sn.write(instanica[10])
            sn.write(',')
            sn.write(instanica[11])
            sn.write(',')
            sn.write(instanica[12])
            sn.write('\n')

with open('posee.csv', 'w', encoding='utf-8') as posee:
    for instanica in nueva_lisat_buques:
        posee.write(instanica[0])
        posee.write(',')
        posee.write(dict_nombres[instanica[10]])
        posee.write('\n')
    
with open ('pesqueros.csv', 'w', encoding='utf-8') as psq:
    for instanica in nueva_lisat_buques:
        if instanica[4] == 'pesquero' or instanica[4] == 'tipo':
            psq.write(instanica[0])
            psq.write(',')
            psq.write(instanica[5])
            psq.write('\n')


with open ('petroleros.csv', 'w', encoding='utf-8') as pet:
    for instanica in nueva_lisat_buques:
        if instanica[4] == 'petrolero' or instanica[4] == 'tipo':
            pet.write(instanica[0])
            pet.write(',')
            pet.write(instanica[8])
            pet.write('\n')

with open ('cargueros.csv', 'w', encoding='utf-8') as car:
    for instanica in nueva_lisat_buques:
        if instanica[4] == 'carga' or instanica[4] == 'tipo':
            car.write(instanica[0])
            car.write(',')
            car.write(instanica[6])
            car.write(',')
            car.write(instanica[7])
            car.write('\n')


with open('tiene.csv', 'w', encoding='utf-8') as tiene:
    for instanica in nueva_lisat_personal:
        tiene.write(instanica[6])
        tiene.write(',')
        tiene.write(instanica[0])
        tiene.write('\n')


with open('itinerarios.csv', 'r', encoding='utf-8') as it_file:
    lit = it_file.readlines()

nlit = []

for linea in lit:
    linea = linea.strip('\n')
    campos = linea.split(',')
    nlit.append(campos)


dict_puertos = {}

contador = -1

with open('puertos.csv', 'w', encoding='utf-8') as pts:
    for instanica in nlit:
        if not instanica[3] in dict_puertos.keys():
            dict_puertos[instanica[3]] = str(contador)
            pts.write(str(contador))
            contador += 1
            pts.write(',')
            pts.write(instanica[3])
            pts.write('\n')


with open('atraques.csv', 'w', encoding='utf-8') as atr:
    for instanica in nlit:
        if instanica[1]:
            atr.write(instanica[2])
            atr.write(',')
            atr.write(dict_puertos[instanica[3]])
            atr.write(',')
            atr.write(instanica[0])
            atr.write(',')
            atr.write(instanica[1])
            atr.write('\n')


with open('prox_itinerario.csv', 'w', encoding='utf-8') as prx:
    for instanica in nlit:
        if not instanica[1] or instanica[1] == 'fecha_salida':
            prx.write(instanica[2])
            prx.write(',')
            prx.write(dict_puertos[instanica[3]])
            prx.write(',')
            prx.write(instanica[0])
            prx.write('\n')
with open('buques.csv','r') as buques_file:
    lista_buques = buques_file.readlines()
    #print(lista_buques)

nueva_lisat_buques = []

for linea in lista_buques:
    linea = linea.strip('\n')
    campos = linea.split(',')
    nueva_lisat_buques.append(campos)
'''
print(len(nueva_lisat_buques[0]))
print(len(nueva_lisat_buques[1]))
print(nueva_lisat_buques[0])
print(nueva_lisat_buques[1])
'''

with open('solo_buques.csv', 'w') as nbf:
    for instanica in nueva_lisat_buques:
        for n_atributo in range(3):
            nbf.write(instanica[n_atributo])
            nbf.write(',')
        nbf.write(instanica[4])
        nbf.write('\n')

lista_nombres = []
dict_nombres = {}

contador = -1

with open('solo_navieras.csv', 'w') as sn:
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

with open('posee.csv', 'w') as posee:
    for instanica in nueva_lisat_buques:
        posee.write(instanica[0])
        posee.write(',')
        posee.write(dict_nombres[instanica[10]])
        posee.write('\n')
    
with open ('pesqueros.csv', 'w') as psq:
    for instanica in nueva_lisat_buques:
        if instanica[4] == 'pesquero' or instanica[4] == 'tipo':
            psq.write(instanica[0])
            psq.write(',')
            psq.write(instanica[5])
            psq.write('\n')


with open ('petroleros.csv', 'w') as pet:
    for instanica in nueva_lisat_buques:
        if instanica[4] == 'petrolero' or instanica[4] == 'tipo':
            pet.write(instanica[0])
            pet.write(',')
            pet.write(instanica[8])
            pet.write('\n')

with open ('cargueros.csv', 'w') as car:
    for instanica in nueva_lisat_buques:
        if instanica[4] == 'carga' or instanica[4] == 'tipo':
            car.write(instanica[0])
            car.write(',')
            car.write(instanica[6])
            car.write(',')
            car.write(instanica[7])
            car.write('\n')
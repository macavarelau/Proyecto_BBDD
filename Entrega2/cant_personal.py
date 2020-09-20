with open ('solo_buques.csv', 'r') as buque:
    buques_list = buque.readlines()
    #print(buques_list)

new_list_buques = []
for linea in buques_list:
    linea = linea.strip('\n')
    campos = linea.split(',')
    new_list_buques.append(campos)
    #print(new_list_buques)

with open ('personal_buque.csv', 'r') as personal:
    personal_list = personal.readlines()
    #print(personal_list)

new_list_personal = []
for line in personal_list:
    line = line.strip('\n')
    campo = line.split(',')
    new_list_personal.append(campo)
    #print(new_list_personal)


lista_final_buques = []
cont = 0
for i in new_list_buques:
    for k in new_list_personal:
        if i[0] == k[6]:
            cont += 1
    i.append(str(cont))
    cont = 0
print(new_list_buques)        

with open('final_buques.csv', 'w', encoding='utf-8') as new:
    for m in new_list_buques:
        new.write(m[0])
        new.write(',')
        new.write(m[1])
        new.write(',')
        new.write(m[2])
        new.write(',')
        new.write(m[3])
        new.write(',')
        new.write(m[4])
        new.write(',')
        new.write(m[5])
        new.write('\n')
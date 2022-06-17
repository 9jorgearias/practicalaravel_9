# dias_semana=("lunes","martes","miercoles","juves","viernes","sabado","domingo")
# for x in dias_semana:
#     print(x)

# (diauno, diados, diastres, diacuatro, diacinco, diaseis, diasiete)=dias_semana
# print(diauno, diados, diastres, diacuatro, diacinco, diaseis, diasiete)

# valores=("euro", "dolar", "Yen", "libraesterlina")
# print(valores)
# lol = list(valores)
# for x in range (1,4):
#     inversion=str(input(f"agrega la moneda {x}: "))
#     lol.append(inversion)
# valores=tuple(lol)
# print (valores)

tiempos=(5.55, 4.22, 5.33, 4.67)
print(tiempos)
suma=0


marcas=list(tiempos)
for x in range(1,4):
    tiempo=float(input(f"digite las nuevas marcas {x}: "))
    marcas.append(tiempo)
tiempos=tuple(marcas)
print(tiempos)
(tuno, *tdos)=tiempos
print(tuno)
print(*tdos)

suma=







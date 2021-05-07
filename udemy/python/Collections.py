tupla = ('Homo sapiens', 'Canis familiaris', 'Felis catus')
print(tupla)
lista1 = ['Homo sapiens', 'Canis familiaris', 'Felis catus']
lista1.append('Teste')
print(lista1)
lista1.remove('Felis catus')
print(lista1)
lista2 = lista1*2
print(lista2)
coleta = {'Aedes aegypt': 32, 'Aedes albopictus': 11}
print(coleta)
print(coleta['Aedes aegypt'])
coleta['Aedes aegypt'] = 11
print(coleta.items())
print(coleta.keys())
print(coleta.values())
biomoleculas = ('proteina', 'acidos nucleicos', 'carboidrado', 'lipideo', 'proteina', 'acidos nucleicos', 'carboidrado', 'lipideo')
print(biomoleculas)
print(set(biomoleculas))
c1 = {1,2,3,4,5}
c2 = {3,4,5,6,7}
print(c1.intersection(c2))
print(c1.difference(c2))
print(c2.difference(c1))

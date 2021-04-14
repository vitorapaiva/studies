m1 = float(input('M1 '))
m2 = float(input('M2 '))
m3 = float(input('M3 '))
media = (m1+m2+m3)/3

if media < 0:
    print('Reprovado')
if 0 <= media <= 4:
    print('Reprovado')
if 4.1 <= media <= 6:
    print('Pegou exame')
    exame = float(input('Exame '))
    if exame < 6:
        print('Reprovado')
    if exame >= 6:
        print('Aprovado')
if media >= 6:
    print('Aprovado')

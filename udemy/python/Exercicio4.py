idade = int(input('Informe idade '))
if idade < 0:
    print('Invalido')
if 0 <= idade <= 12:
    print('Criança')
if 13 <= idade <= 17:
    print('Adolescente')
if idade >= 18:
    print('Adulto')

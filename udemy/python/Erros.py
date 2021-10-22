3 = 4

print('Meu nome e', nome)

print(3 / 0)

print(2.3 / 'cachorro')

c = [1, 2, 3, 4, 5]

print(c[5])

while True:
    try:
        n = int(input('Digite numero'))
    except ValueError:
        print('Valor invalido')
    except KeyboardInterrupt:
        print('Valor invalido')
    else:
        print('Valor digitado é')
        print(n)
        break

class Triangulo:
    def __init__(self, lado1, lado2, lado3, base, altura):
        self.lado1 = lado1
        self.lado2 = lado2
        self.lado3 = lado3
        self.base = base
        self.altura = altura

    def area(self):
        return (self.base * self.altura) / 2


t1 = Triangulo(2, 1, 3, 4, 3)

print(t1.lado1, t1.lado2, t1.lado3, t1.base, t1.altura)
print(t1.area())

t2 = Triangulo(8, 8, 8, 16, 9)

print(t2.lado1, t2.lado2, t2.lado3, t2.base, t2.altura)

print(t2.area())
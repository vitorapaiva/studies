import numpy as np

matriz = np.array([[2, 3, 1],
                  [4, 5, 7]])

print(matriz)
print(matriz.shape)
print(matriz[0])
print(matriz[1])
print(matriz[0][1])
print(matriz[1][1])
for i in range(matriz.shape[0]):
    for j in range(matriz.shape[1]):
        print(matriz[i][j])
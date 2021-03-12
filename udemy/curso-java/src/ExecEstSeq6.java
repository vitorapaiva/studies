import java.util.Locale;
import java.util.Scanner;

public class ExecEstSeq6 {
    public static void main(String[] args) {
        Locale.setDefault(Locale.US);
        Scanner sc = new Scanner(System.in);
        double valor1 = sc.nextDouble();
        double valor2 = sc.nextDouble();
        double valor3 = sc.nextDouble();
        double triangulo = (valor1 * valor3)/2.0;
        double pi = 3.14159;
        double areaCirculo = pi * (Math.pow(valor3,2));
        double areaTrapezio = ((valor1+valor2))/2*valor3;
        double areaQuadrado = Math.pow(valor2,2);
        double areaRetangulo = valor1*valor2;
        System.out.println(triangulo);
        System.out.println(areaCirculo);
        System.out.println(areaTrapezio);
        System.out.println(areaQuadrado);
        System.out.println(areaRetangulo);
    }
}

import java.util.Locale;
import java.util.Scanner;
import java.lang.Math;

public class ExecEstSeq2 {
    public static void main(String[] args) {
        Locale.setDefault(Locale.US);
        Scanner sc = new Scanner(System.in);
        double raio = sc.nextDouble();
        double pi = 3.14159;
        double area = pi * Math.sqrt(raio);
        System.out.printf("A = %.4f%n", area);
    }
}

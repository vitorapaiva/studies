import java.util.Locale;
import java.util.Scanner;

public class ExecEstSeq5 {
    public static void main(String[] args) {
        Locale.setDefault(Locale.US);
        Scanner sc = new Scanner(System.in);
        int cod1 = sc.nextInt();
        int qty1 = sc.nextInt();
        double valor1 = sc.nextDouble();
        int cod2 = sc.nextInt();
        int qty2 = sc.nextInt();
        double valor2 = sc.nextDouble();
        double total = (valor1 * qty1) + (valor2 * qty2);
        System.out.print("VALOR A PAGAR: R$ "+total);
    }
}

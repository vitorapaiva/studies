import java.util.Locale;
import java.util.Scanner;

public class ExecEstSeq4 {
    public static void main(String[] args) {
        Locale.setDefault(Locale.US);
        Scanner sc = new Scanner(System.in);
        int numFunc = sc.nextInt();
        int qtyHoras = sc.nextInt();
        double valorHora = sc.nextDouble();

        double sal = qtyHoras * valorHora;
        System.out.println("NUMBER = "+numFunc);
        System.out.printf("SALARY = U$ %.2f",sal);
    }
}

import java.util.Locale;
import java.util.Scanner;

public class ExecEstSeq3 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int a = sc.nextInt();
        int b = sc.nextInt();
        int c = sc.nextInt();
        int d = sc.nextInt();
        int diff = (a*b) - (c*d);
        System.out.print("DIFERENCA = "+diff);
    }
}

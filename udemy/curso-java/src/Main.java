import java.util.Locale;
import java.util.Scanner;

public class Main {
    public static void main(String[] args){
        Locale.setDefault(Locale.US);
        Scanner sc = new Scanner(System.in);
        String x;
        String y;
        String z;

        x = sc.nextLine();
        y = sc.nextLine();
        z = sc.nextLine();

        System.out.println("Voce digitou: " + x);
        System.out.println("Voce digitou: " + y);
        System.out.println("Voce digitou: " + z);


        sc.close();
    }
}

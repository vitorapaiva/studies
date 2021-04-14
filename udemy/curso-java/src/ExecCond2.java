import java.util.Scanner;

public class ExecCond2 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int entrada = sc.nextInt();
        if(entrada%2==0){
            System.out.print("PAR");
        }
        if(entrada%2!=0){
            System.out.print("IMPAR");
        }
    }
}

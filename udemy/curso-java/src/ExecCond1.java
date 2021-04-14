import java.util.Scanner;

public class ExecCond1 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int entrada = sc.nextInt();
        if(entrada<0){
            System.out.print("NEGATIVO");
        }
        if(entrada>=0){
            System.out.print("NAO NEGATIVO");
        }
    }
}

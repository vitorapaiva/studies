import java.util.Scanner;

public class ExecCond3 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int entrada = sc.nextInt();
        int entrada2 = sc.nextInt();
        int maior = entrada;
        int menor = entrada2;
        if(entrada < entrada2){
            maior = entrada2;
            menor = entrada;
        }
        if(maior%menor==0){
            System.out.print("Sao multiplos");
        }
        if(maior%menor!=0){
            System.out.print("Nao sao multiplos");
        }
    }
}

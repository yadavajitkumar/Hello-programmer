import java.util.Scanner;

public class Number {

    public static void main(String[] args) {

        System.out.println(
                "Enter your choice what do you want: \n 1.print the no 1 to 100 \n 2.print the no in even no \n 3.print the reverse no \n 4.print the reverse no in even no \n 5.pirnt the no 2 no difference \n 6.press this key to exit \n");
        Scanner sc = new Scanner(System.in);
        int x = sc.nextInt();

        switch (x) {
        case 1:
        System.out.println("enter the no to print 1 to 100 :\n");
        Scanner b = new Scanner(System.in);
        int w= b.nextInt();
            for (int i = 0; i <= w; i++) {
                System.out.println(i);
            }
            break;

        case 2:
            System.out.println("Enter the alternate no: and print the even no  \n");
            Scanner sw = new Scanner(System.in);
            int z = sw.nextInt();
            for (int i = 0; i < z + 1; i++) {
                System.out.println(i);
                i = i + 1;
            }
            break;

        case 3:
            System.out.println("Enter the no to print reverse no: \n");
            Scanner d = new Scanner(System.in);
            int y = d.nextInt();
            for (int i = 100; i >= y; i--) {
                System.out.print("\n" + i);
            }
            break;

        case 4:
            System.out.println("Enter the no to print reverse no in even no : \n");
            Scanner f = new Scanner(System.in);
            int m = f.nextInt();
            for (int i = 100; i >= m; i--) {
                System.out.print("\n" + i);
                i = i - 2;
            }
        case 5:
        System.out.println("Enter the no to print the 2 no difference in no : \n");
        Scanner bh=new Scanner(System.in);
        int u=bh.nextInt();
        for(int i=1;i<=u;i++)
        {
            System.out.println("\n"+i);
            i=i+1;
        }
        case 6:
        default:

        }

    }
}
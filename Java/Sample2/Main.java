import shape.*;

public class Main {

    public static void main(String[] args) {

        Circle A = new Circle(1, 1, 2);
        System.out.println(A.area());
        System.out.println(A.volume());
        A.printProperty();
        System.out.println();

        Sphere S = new Sphere(2, 2, 3);
        System.out.println(S.volume());
        S.printProperty();
        System.out.println();

        Cylinder C = new Cylinder(3, 3, 4, 5);
        System.out.println(C.volume());
        C.printProperty();

    }

}
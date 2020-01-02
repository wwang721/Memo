package shape;

public class Circle implements Shape {

    static float PI = 3.1415926535F;
    private final float x, y;
    final float r;

    public Circle(float x, float y, float r) {
        this.x = x;
        this.y = y;
        this.r = r;
    }

    public float area() {
        return PI * this.r * this.r;
    }

    public float volume() {
        System.out.println("Error: Circle doesn't have volume!");
        return 0F;
    }

    public void printProperty() {
        System.out.println("Circle: (" + this.x + "," + this.y + ") r=" + this.r);
    }
    
}
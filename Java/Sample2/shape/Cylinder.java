package shape;

public class Cylinder extends Circle implements Shape {

    private final float h;

    public Cylinder(float x, float y, float r, float h) {
        super(x, y, r);
        this.h = h;
    }

    public float volume() {
        return PI * this.r * this.r * this.h;
    }

    public void printProperty() {
        System.out.println("Sphere: r=" + this.r);
    }
    
}
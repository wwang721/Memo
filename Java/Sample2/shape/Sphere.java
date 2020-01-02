package shape;

public class Sphere extends Circle implements Shape {

    public Sphere(float x, float y, float r) {
        super(x, y, r);
    }

    public float volume() {
        return 4 * PI * this.r * this.r * this.r / 3;
    }

    public void printProperty() {
        System.out.println("Sphere: r=" + this.r);
    }
    
}
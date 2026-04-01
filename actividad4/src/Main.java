abstract class Producto {
    protected String nombre;
    protected double precio;

    public Producto(String nombre, double precio) {
        this.nombre = nombre;
        this.precio = precio;
    }

    public abstract void mostrarDetalles();
}

class Electronico extends Producto {
    private int garantiaMeses;

    public Electronico(String nombre, double precio, int garantiaMeses) {
        super(nombre, precio);
        this.garantiaMeses = garantiaMeses;
    }

    @Override
    public void mostrarDetalles() {
        System.out.println("Electrónico: " + nombre +
                ", Precio: $" + precio +
                ", Garantía: " + garantiaMeses + " meses");
    }
}

class Alimento extends Producto {
    private String fechaCaducidad;

    public Alimento(String nombre, double precio, String fechaCaducidad) {
        super(nombre, precio);
        this.fechaCaducidad = fechaCaducidad;
    }

    @Override
    public void mostrarDetalles() {
        System.out.println("Alimento: " + nombre +
                ", Precio: $" + precio +
                ", Caduca: " + fechaCaducidad);
    }
}

class Ropa extends Producto {
    private String talla;

    public Ropa(String nombre, double precio, String talla) {
        super(nombre, precio);
        this.talla = talla;
    }

    @Override
    public void mostrarDetalles() {
        System.out.println("Ropa: " + nombre +
                ", Precio: $" + precio +
                ", Talla: " + talla);
    }
}

public class Main {
    public static void main(String[] args) {

        Producto p1 = new Electronico("Laptop", 15000, 12);
        Producto p2 = new Alimento("Leche", 25, "10/04/2026");
        Producto p3 = new Ropa("Playera", 200, "M");

        p1.mostrarDetalles();
        p2.mostrarDetalles();
        p3.mostrarDetalles();
    }
}

package entities;

public class Product {
    public String name;
    public double price;
    public int quantity;

    public double totalValueInStock()
    {
        return price*quantity;
    }

    public void addProducts(Integer quantity)
    {
        this.quantity = this.quantity+quantity;
    }

    public void removeProducts(Integer quantity)
    {
        this.quantity = this.quantity-quantity;
    }
}

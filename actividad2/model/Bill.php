
<?php

class Bill
{
    private float $price = 7.25;
    private int $fee = 21;
    public Product $product;

    public function __construct(
      $product
    ) {
      $this->product = $product;
    }

    public function getTotalPrice() {
      $totalProductsPrice = $this->price * $this->product->units;
      $totalFees = $this->fee * $totalProductsPrice / 100;
      $totalPrice = $totalFees + $totalProductsPrice;
      return number_format($totalPrice, 2);
    }

    public function generateBill() {
      echo "Producto: ".$this->product->name."<br>";
      echo "Unidades: ".$this->product->units."<br>";
      echo "El precio total de la factura con ".$this->fee."% de IVA es: ".$this->getTotalPrice();
    }
}
?>


<?php
class Product
{
    public string $name;
    public int $units;

    // public function __construct(
    //   public string $name,
    //   public int $units
    // ) {}

    public function __construct(
      $name,
      $units
    ) {
      $this->name = $name;
      $this->units = $units;
    }

    public function showProductDetails() {
      echo "El producto elegido es ".$this->name." y se han solicitado ".$this->units." unidades";
    }

    public function isValidAmount() {
      return $this->units >= 20;
    }

}

?>


<?php
class Articulo
{
    public int $peso;
    public float $precio;
    public string $categoria;

    public function __construct(
      $peso,
      $precio,
      $categoria
    ) {
      $this->peso = $peso;
      $this->precio = $precio;
      $this->categoria = $categoria;
    }

}

?>


<?php

require('Articulo.php');

class Mesa extends Articulo
{
    public string $tipo;

    public function __construct(
        $peso,
        $precio,
        $categoria,
        $tipo
    ) {
        parent::__construct($peso, $precio, $categoria);
        $this->tipo = $tipo;
    }

    public function consultarPrecio() {
        echo "Producto: Mesa<br>";
        echo "Peso: ".$this->peso."<br>";
        echo "Precio: ".$this->precio."<br>";
        echo "Categoria: ".$this->categoria."<br>";
        echo "Tipo: ".$this->tipo."<br>";
    }

}

?>

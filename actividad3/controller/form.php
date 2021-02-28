<?php

  require('../model/Mesa.php');

  $peso = intval($_POST['peso']);
  $precio = floatval($_POST['precio']);
  $categoria = $_POST['categoria'];
  $tipo = $_POST['tipo'];

  $product = new Mesa($peso, $precio, $categoria, $tipo);

  $product->consultarPrecio();
?>
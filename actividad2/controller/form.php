<?php

  require('../model/Product.php');
  require('../model/Bill.php');

  $name = $_POST['name'];
  $units = intval($_POST['units']);

  $product = new Product($name, $units);
  $bill = new Bill($product);

  $isValidAmount = $product->isValidAmount();

  if ($isValidAmount) {
    $bill->generateBill();
  } else {
    echo "Solo aceptamos pedidos de al menos 20 unidades";
  }
?>
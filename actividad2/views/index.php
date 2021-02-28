<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad 2</title>

  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container shadow min-vh-100 py-2">

    <h1>Cesta de la compra</h1>

    <p>Introduce un producto y la cantidad de unidades que deseas solicitar</p>
    
    <!-- Formulario -->
    <form name="products" action="../controller/form.php" method="post">
      <div class="form-group">
        <label for="nameField">Nombre</label>
        <input type="text" name="name" class="form-control" id="nameField" placeholder="Introduce el nombre del producto">
      </div>
      <div class="form-group">
        <label for="unitsField">Unidades</label>
        <input type="number" name="units" class="form-control" id="unitsField" placeholder="Introduce el número de unidades">
      </div>
      <button type="submit" class="btn btn-primary" value="submit">Enviar</button>
    </form>

  </div>
  

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad 3</title>

  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container shadow min-vh-100 py-2">

    <h1>Creación de mesa</h1>

    <p>Introduce los datos en el formulario para crear el producto</p>
    
    <!-- Formulario -->
    <form name="articulo" action="../controller/form.php" method="post">
      <div class="form-group">
        <label for="pesoField">Peso</label>
        <input type="text" name="peso" class="form-control" id="pesoField" placeholder="Introduce el peso del producto">
      </div>
      <div class="form-group">
        <label for="precioField">Precio</label>
        <input type="text" name="precio" class="form-control" id="precioField" placeholder="Introduce el precio">
      </div>
      <div class="form-group">
        <label for="categoriaField">Categoria</label>
        <input type="text" name="categoria" class="form-control" id="categoriaField" placeholder="Introduce la categoria">
      </div>
      <div class="form-group">
        <label for="tipoField">Tipo</label>
        <input type="text" name="tipo" class="form-control" id="tipoField" placeholder="Introduce el tipo">
      </div>
      <button type="submit" class="btn btn-primary" value="submit">Enviar</button>
    </form>

  </div>
  

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</body>
</html>
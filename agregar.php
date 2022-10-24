<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tienda de ropa</h1>
<button type="submit"><a href="index.html">Inicio</a></button>
  <button type="submit"><a href="buzo.php">tipo de prenda</a></button>
  <button type="submit"><a href="marca.php">nick</a></button>
  <button type="submit"><a href="precio.php">mas de 500$</a></button>
  <button type="submit"><a href="listar.php">Listar ropa</a></button>
  <button type="submit"><a href="agregar.html">Agregar ropa</a></button>
  <button type="submit"><a href="listarencards.php">foto</a></button>
  <h2>Lista de ropa</h2>
  <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

    <?php


     // 1) Conexion
     // a) realizar la conexion con la bbdd
     // b) seleccionar la base de datos a usar
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tiendaropa");
    // 2) Almacenamos los datos del envío POST
    // a) generar variables para cada dato a almacenar en la bbdd
    // Si se desea almacenar una imagen en la base de datos usar lo siguiente: addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))

 $tipo_de_prenda = $_POST ['tipo_de_prenda'];
 $marca = $_POST ['marca'];
 $talle = $_POST ['talle'];
 $precio = $_POST ['precio'];
 $imagen = addcslashes(file_get_contents($_FILES['imagen']['tmp_name']));

 // 3) Preparar la orden SQL
 // INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
 // => Ingresa dentro de la siguiente tabla los siguientes valores
 // a) generar la consulta a realizar
    $consulta = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen )
        VALUES ('', '$tipo_de_prenda',' $marca',' $talle',' $precio',' $imagen')";

        // 4) Ejecutar la orden y ingresamos datos
        // a) ejecutar la consulta
mysqli_query ($conexion, $consulta);

   // a) rederigir a index

     header('location: index.html');
     ?>




     <?php

     //insertame ala tabla en la tiendaropa en la tabla  ............ agragame  ............
    // INSERT INTO tiendaropa
      //       VALUE

     //boorame todo los nike y que tenga xl


     //se puede agragar un caompo extra ejemplo esta cursando si o no si esta curdsando queda sino se cac brot

     //DELETE FROM tiendaropa WHERE marca =' nike ' AND talle ='xl'

     //SET MODIFICA EL NUEVO VALOR EN ESTE CASO PONE PEDRO
     //UPDATE tiendaropa SET marca = 'PEDRO'
     //WHERE INDICA FILAS QUE QUEREMOS MODIFICAR
     //WHERE talle 'xl' AND marca 'nike'


     ?>
</body>
</html>

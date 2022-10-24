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

    // 2) Almacenamos los datos del envío GET
    // a) generar variables para el id a utilizar
        $id = $_GET ['id'];

        // 3) Preparar la orden SQL
        // DELETE FROM nombre_tabla WHERE campo_tabla=dato
        // => Elimina de la siguiente tabla el registro donde este campo sea igual a este dato
        // DELETE FROM nombre_tabla
        // => Elimina todos los registros de la siguiente tabla
        // a) generar la consulta a realizar
    $consulta= "DELETE FROM `ropa`WHERE `id`=$id";

    // 4) Ejecutar la orden y eliminamos el regitro seleccionado
    // a) ejecutar la consulta
    mysqli_query($conexion,$consulta);

      // a) rederigir a index
    header('location: listar.php');
 ?>
</table>
</body>
</html>

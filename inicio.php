<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Administrar clientes</title>
        <link rel="stylesheet" href="css/style5.css">
</head>
<body>
    <div class="entradas">
    <form action="" method="POST">
    <label >id</label>
    <input type="text"name="id"><br>
    <label> Estado </label>
    <input type="text" name="estado"><br>
    <label> Clientes </label>
    <input type="text" name="clientes"><br>
    <label> Empresa </label>
    <input type="text" name="empresa"><br> <br>

    <input type="submit" name="insertar" value="INSERTAR">
    <input type="submit" name="consultar" value="CONSULTAR">
    <input type="submit" name="actualizar" value="ACTUALIZAR">
    <input type="submit" name="eliminar" value="ELIMINAR"><br>
    <?php
    
    $conexion = new mysqli('localhost','root','','clientes');

    $id=$_POST['id'];
    $estado=$_POST['estado'];
    $clientes=$_POST['clientes'];
    $empresa=$_POST['empresa'];

    if(isset($_POST['insertar'])){
        $insertar="INSERT INTO clientes (estado,clientes,empresa) VALUES ('$estado','$clientes','$empresa')";
        $sql=mysqli_query($conexion,$insertar);
    }
    if(isset($_POST['consultar'])){
       
            $consultar = mysqli_query($conexion, "SELECT * FROM clientes") or die("error al extraer los datos");
echo '<table border="1">';
  echo '<tr>';
    echo '<th id="id">ID</th>';
    echo '<th id="clientes">Clientes</th>';
    echo '<th id="estado">Estado</th>';
    echo '<th id="empresa">Empresa</th>';
  echo '</tr>';
  while($extraido = mysqli_fetch_array($consultar)) {
  echo '<tr>';
    echo  '<td>'.$extraido['id'].'</td>';
    echo  '<td>'.$extraido['clientes'].'</td>';
    echo  '<td>'.$extraido['estado'].'</td>';
    echo  '<td>'.$extraido['empresa'].'</td>';
  echo '</tr>';
  }
mysqli_close($conexion);
echo '</table>';
        }
    if(isset($_POST['actualizar'])){
       $actualizar="UPDATE clientes SET estado='$estado',clientes='$clientes',empresa='$empresa' WHERE id='$id' ";
       $sql=mysqli_query($conexion,$actualizar);
    }
    if(isset($_POST['eliminar'])){
        $eliminar="DELETE FROM clientes WHERE id='$id'";
        $sql=mysqli_query($conexion,$eliminar);
    }
    ?>
</form>
</div>
</body>
</html>
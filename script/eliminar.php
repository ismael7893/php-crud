<?php
require_once 'conexion.php';

// echo json_encode($_POST);
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$id = $_GET['id'];

$sql = "DELETE FROM producto WHERE id='$id';";

// echo $sql;
// exit;
if($mysqli->query($sql)){
    // echo "se guardo";
    header("Location: ../index.php");
} else{
    echo "no se guardo";
    sleep(5);
    header("Location: ../nuevoProducto.php");
}
?>
<?php
require_once 'conexion.php';

// echo json_encode($_POST);
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$sql = "INSERT INTO producto (nombre, precio) VALUES ('$nombre','$precio')";

if($mysqli->query($sql)){
    // echo "se guardo";
    header("Location: ../index.php");
} else{
    echo "no se guardo";
    sleep(5);
    header("Location: ../nuevoProducto.php");
}
?>
<?php
require_once 'conexion.php';
$id = $_GET['id'];
$sql = $mysqli->query("SELECT * FROM producto WHERE id = '$id'");
// echo $sql->num_rows;
if($sql->num_rows > 0){
    $data = $sql->fetch_object();
} else{
    echo "No hay registros";
}
?>
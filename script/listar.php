<?php
require_once 'conexion.php';
$sql = $mysqli->query("SELECT * FROM producto");
// echo $sql->num_rows;
if($sql->num_rows > 0){
    $datos = [];
    while($data = $sql->fetch_object()){
        $datos[] = $data;
    }
    // echo json_encode($datos);
} else{
    echo "No hay registros";
}
?>
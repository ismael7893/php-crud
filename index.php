<?php
    require_once 'script/listar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-6">
                <h2>Productos</h2>
            </div>
            <div class="col-6 text-end">
                <a href="nuevoProducto.php" class="btn btn-primary">Agregar Producto</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <table class="table table-strip">
                    <thead>
                        <tr class="text-center">
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Precio</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $data):?>
                        <tr>
                            <td>
                                <?=$data->id;?>
                            </td>
                            <td>
                                <?=$data->nombre;?>
                            </td>
                            <td>
                                <?=$data->precio?>
                            </td>
                            <td class="text-end">
                                <a href="editarProducto.php?id=<?=$data->id;?>" class="btn btn-warning">Editar</a>
                                <a href="eliminarProducto.php?id=<?=$data->id;?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
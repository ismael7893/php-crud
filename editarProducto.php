<?php
    require_once 'script/listarUno.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-3">Editar producto</h2>
        <form action="script/editar.php?id=<?=$_GET['id'];?>" method="POST">
            <div class="form-group">
                <label for="">Nombre</label>
                <input class="form-control" name="nombre" type="text" value="<?=$data->nombre;?>">
            </div>
            <div class="form-group">
                <label for="">Precio</label>
                <input class="form-control" name="precio" type="text" value="<?=$data->precio;?>">
            </div>
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
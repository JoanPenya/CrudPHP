<?php

include_once 'sqlconnect.php';

$id = $_GET['id'];

$selectSql = $conn->query("select * from informacion where id = '$id'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario <?php echo $id; ?></title>
</head>
<body>
    <form action="update.php?id=<?php echo $id; ?>" method="post">
    
    <?php while($f = $selectSql->fetch_object()){ ?>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" value="<?php echo $f->Nombre; ?>" name='nombre'>
        </div>

        <div>
            <label for="nombre">Apellido:</label>
            <input type="text" value="<?php echo $f->Apellido; ?>" name='apellido'>
        </div>

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" value="<?php echo $f->Profesion; ?>" name='profesion'>
        </div>

        <button>Editar</button>

    <?php } ?>
    
    </form>
</body>
</html>
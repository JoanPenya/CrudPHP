<?php

include_once 'sqlconnect.php';

$res = $conn->query("select * from informacion");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Oficio</th>
            <th>Modificar</th>
            <th>Borrar</th>
        </tr>
        <?php

            while($f = $res->fetch_object()){
                echo "<tr><td>".$f->id."</td><td>".$f->Nombre."</td><td>".$f->Apellido."</td><td>".$f->Profesion."</td><td><a href='editar.php?id=".$f->id."'>Editar</a></td><td><a href='delete.php?id=".$f->id."'>Borrar</a></td></tr>";
            }

        ?>

    </table>
    <br /><br />
    <form action="insert.php" method="post">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name='nombre'>
            </div>
            <div>
                <label for="nombre">Apellido</label>
                <input type="text" name='apellido'>
            </div>
            <div>
                <label for="nombre">Oficio</label>
                <input type="text" name='profesion'>
            </div>

            <button>Publicar</button>
    </form>

</body>
</html>
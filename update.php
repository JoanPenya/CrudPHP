<?php

include_once 'sqlconnect.php';

$id = $_GET['id'];

if(isset($_POST["nombre"], $_POST["apellido"], $_POST["profesion"]) and $_POST["nombre"] !="" and $_POST["apellido"] !="" and $_POST["profesion"] !=""){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $profesion = $_POST['profesion'];
       
    $sql = "update informacion set Nombre = '$nombre', Apellido = '$apellido', Profesion = '$profesion' where id = '$id'";

    if(mysqli_query($conn, $sql)){
        header("Location: index.php");
    }else{
        echo 'Los datos que has introducido, falla. Revisa <a href="index.php">formulario</a> <br />';
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
    echo '<p>Por favor, complete el <a href="index.php">formulario</a></p>';
}

?>
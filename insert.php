<?php

include_once 'sqlconnect.php';

if(isset($_POST["nombre"], $_POST["apellido"], $_POST["profesion"]) and $_POST["nombre"] !="" and $_POST["apellido"] !="" and $_POST["profesion"] !=""){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $profesion = $_POST['profesion'];
       
    $sql = "insert into informacion (Nombre, Apellido, Profesion) values ('$nombre', '$apellido', '$profesion')";

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
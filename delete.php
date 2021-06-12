<?php

include_once 'sqlconnect.php';

$id = $_GET['id'];

$sqlDel = "delete from informacion where id = '$id'";

if(mysqli_query($conn, $sqlDel)){
    header("Location: index.php");
}else{
    echo 'Los datos que has intentado borrar, falla. <a href="index.php">Indice</a> <br />';
    echo "Error: " . $sqlDel . "<br>" . mysqli_error($conn);
}

?>
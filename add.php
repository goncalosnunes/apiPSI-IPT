<?php
include('./config.php');

$numero = $_POST['number'];

mysqli_query($conn, "INSERT INTO numeros (numero) VALUES ('$numero')");
?>
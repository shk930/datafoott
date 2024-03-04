<?php 

$servername = "localhost";
$username = "datafoot";
$password = "Drancy93";
$database = "datafoot";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Erreur de connexion";
}

?>
<!-- fichier pour se connecter à la base de données et gérer les actions et les requêtes des autres fichiers -->
 
<?php

$hostname = "mysql-tfy.alwaysdata.net";
$username = "tfy";
$password = "";
$database = "tfy_sae401";

$conn = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno()) {
    throw new RuntimeException('mysqli connection error: ' . mysqli_connect_error());
}

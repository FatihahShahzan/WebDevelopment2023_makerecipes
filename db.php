<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "makerecipes";

$dbConnection = mysqli_connect($servername, $username, $password, $dbname);

if(!$dbConnection){
    die("Connection failed:".mysqli_connect_error());

}
?>
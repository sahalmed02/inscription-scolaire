<?php


$_SERVER = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base = "projet";

$connect = mysqli_connect($_SERVER, $utilisateur, $mot_de_passe, $base);

$email = $_POST["email"];
$password = $_POST["passwd"];
$confirm_pass = $_POST["confirm-passwd"];

$sql = "INSERT INTO connexion (Email,Passwd,retaper_passwd) VALUES ('$email','$password','$confirm_pass')";

$query = mysqli_query($connect, $sql );

if ($query){
    header("Location:Projet.html");
    exit();
}



?>
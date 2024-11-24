<?php
session_start();
$_SERVER = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base = "projet";

$connect = mysqli_connect($_SERVER, $utilisateur, $mot_de_passe, $base);

$email = $_POST["email"];

$Password = $_POST["passwd"];

#$requete = mysqli_query()

$query = mysqli_query($connect, "SELECT * FROM connexion WHERE Email = '$email' AND Passwd = '$Password'");

if (mysqli_fetch_row($query) == 0){ 

    echo "Email ou password est incorrect!!! ";
}

else {

    header("Location:Projet.html");
    exit();
}


?>
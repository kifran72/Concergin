<?php

include_once 'dbconnect.php';


// Récupération des champs d'inscription //

$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Mail = $_POST["Mail"];
$MDP = md5($_POST["MDP"]);
$MDP_conf = $_POST["MDP-conf"];
$Addresse = $_POST["Addresse"];
$Phone = $_POST["Phone"];
$role = 1;

// Insertion des données utilisateurs //

$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
$req = $db->prepare("INSERT INTO utilisateur(Nom_Personne, Prenom_Personne, Password_Personne, Mail_Personne, Addresse_Personne, Num_Telephone, Role) VALUES (:nom,:prenom,:mdp,:mail,:addr,:phone,:role)");
$req->bindParam(":nom", $Nom);
$req->bindParam(":prenom", $Prenom);
$req->bindParam(":mdp", $MDP);
$req->bindParam(":mail", $Mail);
$req->bindParam(":addr", $Addresse);
$req->bindParam(":phone", $Phone);
$req->bindParam(":role", $role);
$req->execute();

// Test pour s'avoir si la requête c'est bien executé //

if ($req->errorInfo()[0] == '00000') {
    header("location: index.php?page=Accueil");
    ob_flush();
}

if ($req->errorInfo()[0] != '00000') {
    header("location: index.php?page=Inscription");
    ob_flush();
}


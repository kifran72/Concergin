<?php

include_once 'dbconnect.php';
// Récupération du champs de commande//

$commande = $_POST['Commande'];
$role = 1;



// Insertion des données de la commande //

$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
$req = $db->prepare("INSERT INTO commandes(commande, Role) VALUES (:commande,:role)");
$req->bindParam(":role", $role);
$req->bindParam(":commande", $commande);
$req->execute();


// Test pour s'avoir si la requête c'est bien executé //

if ($req->errorInfo()[0] == '00000') {
    header("location: index.php?page=Accueil");
    ob_flush();
}

if ($req->errorInfo()[0] != '00000') {
    header("location: index.php?page=Commande");
    ob_flush();
}


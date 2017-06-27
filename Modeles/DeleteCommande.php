<?php
include_once 'dbconnect.php';

function DeleteCommande($id){
    $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
    $req = $db->prepare("DELETE FROM commandes WHERE ID_commande = ". $id ."") or die("Id non valide!");
    $req->execute();
    return true;
}


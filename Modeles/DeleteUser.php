<?php
include_once 'dbconnect.php';

function DeleteUser($id){
    $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
    $req = $db->prepare("DELETE FROM utilisateur WHERE ID_Personne = ". $id ."") or die("Id non valide!");
    $req->execute();
    return true;
}


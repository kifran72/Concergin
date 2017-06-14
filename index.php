<?php

session_start();
ob_start();

header('location: Vues/Accueil.php?mes');

$controller = new \Controller\PostController();
$controller->index();

?>
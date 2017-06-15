<?php

include_once "dbconnect.php";


class Connexion
{
	private $user = $_POST["user"];
	private $pass = $_POST["pass"];
	
	public function __construct($user,$pass)
	{	
		$this->user = $user;
		$this->$pass = $pass		

		return $user, $pass;
	}


	public function VerifConnection($user, $pass)
	{
		getBDD();

		$req = $db->prepare("SELECT Prenom_Personne, Nom_Personne, Role FROM Utilisateur WHERE ID_Personne=:id and Password_Personne=:mdp");

		$req->bindParam(":id", $user);

		$req->execute();

		$resultat = $req->fetchAll();

		$db=null;

		return $resultat;
	}


	public function ChoixRole($user, $pass)
	{
			getBDD();

		    $req = $db->prepare("SELECT Prenom_Personne, Nom_Personne, Role FROM Utilisateur WHERE MAIL_Personne=:mail and Password_Personne=:mdp");

		    $req->bindParam(":mail", $user);

		    $req->bindParam(":mdp", $pass);

		    $req->execute();

		    $resultat = $req->fetchAll();

		    return $resultat;
		
	}

	function getBDD() {
    $bdd = new PDO('mysql:host=localhost;dbname=conciergin;charset=utf8', 'root',
            'toor', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

}
 
?>


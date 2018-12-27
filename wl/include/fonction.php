<?php

// ACCES / CONNEXION A LA BASE DE DONNEES

	function acces_bdd(){
	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=NOMBDD;charset=utf8', 'NOMSQL', 'MOTDEPASS');
			return $bdd;
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

	}

// Connexion à la base de données

	$bdd = acces_bdd();

// Insertion du STEAM ID

	try
		{
			$req = $bdd->prepare("INSERT INTO whitelist (identifier) VALUES(:identifier)");
			$req->execute(array('identifier'=>$_POST['identifier']));

		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

?>
	
<?php 

	if ($req) {

		header('Location:../index.php?ajout=ok');

	}else{
	
	}

?>

<?php
	if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$email = $_POST['email'];

		$query = "INSERT INTO utilisateurs(prenom, nom, email) VALUES('$prenom', '$nom', '$email')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Personne Ajoutée!";
	}
?>
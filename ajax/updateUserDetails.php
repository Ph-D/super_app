<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = '$_POST['nom']';
    $email = $_POST['email'];

    // Updaste User details
    $query = "UPDATE utilisateurs SET prenom = '$prenom', nom = '$nom', email = '$email' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
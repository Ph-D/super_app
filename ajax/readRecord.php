<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>Numéro</th>
							<th>Prénom</th>
							<th>Nom</th>
							<th>Adresse Email</th>
							<th>Mettre à jour</th>
							<th>Supprimer</th>
						</tr>';

	$query = "SELECT * FROM utilisateurs";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['prenom'].'</td>
				<td>'.$row['nom'].'</td>
				<td>'.$row['email'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Mettre à jour</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Supprimer</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Pas de résultats!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>
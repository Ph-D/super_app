<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>TODO APP</title>

<!-- Bootstrap CSS File -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<!-- Content -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>SUPER APP !!!!!! pour enregistrer des personnes</h2>
			<div class="pull-right">
				<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Ajouter </button>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h4>Enregistrements:</h4>
			<div class="records_content"></div>
		</div>
	</div>
</div>
<!-- /Content -->

<!-- Modal ADD -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Ajouter une personne</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="prenom">Prénom</label>
					<input type="text" id="prenom" placeholder="Prénom" class="form-control" />
				</div>
				<div class="form-group">
					<label for="nom">Nom</label>
					<input type="text" id="nom" placeholder="Nom" class="form-control" />
				</div>
				<div class="form-group">
					<label for="email">Adresse Email</label>
					<input type="text" id="email" placeholder="Adresse Email" class="form-control" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
				<button type="button" class="btn btn-primary" onclick="addRecord()">Ajouter personne</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal UPDATE -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Mise à jour</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_prenom">Prénom</label>
                    <input type="text" id="update_prenom" placeholder="Prénom" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_nom">Nom</label>
                    <input type="text" id="update_nom" placeholder="Nom" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Adresse Email</label>
                    <input type="text" id="update_email" placeholder="Adresse Email" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Enregistrer Changements</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->




<!-- Jquery JS file -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<!-- Bootstrap JS file -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
// Add Record 
function addRecord() {
  
    var prenom = $("#prenom").val();
    var nom = $("#nom").val();
    var email = $("#email").val();

    // Add record
    $.post("ajax/addRecord.php", {
        prenom: prenom,
        nom: nom,
        email: email
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        
        readRecords();

        // clear fields from the popup
        $("#prenom").val("");
        $("#nom").val("");
        $("#email").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

//DELETE record
function DeleteUser(id) {
    var conf = confirm("Êtes-vous sur de vouloir supprimer cet utilisateur?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

//GET current values to fill input update fields
function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_prenom").val(user.prenom);
            $("#update_nom").val(user.nom);
            $("#update_email").val(user.email);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}


function UpdateUserDetails() {
    // get values
    var prenom = $("#update_prenom").val();
    var nom = $("#update_nom").val();
    var email = $("#update_email").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            prenom: prenom,
            nom: nom,
            email: email
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}



// READ recods on page load
$(document).ready(function () {
    readRecords(); // calling function
});
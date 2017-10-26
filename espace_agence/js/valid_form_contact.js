function validateForm() {
    var x = document.forms["contact"]["nom_contact"].value;
    if (x == null || x == "") {
        alert("Le champ « Nom » doit-être renseigné.");
        return false;
    }

	var x = document.forms["contact"]["prenom_contact"].value;
    if (x == null || x == "") {
        alert("Le champ « Prénom » doit-être renseigné.");
        return false;
    }

	var x = document.forms["contact"]["fonction_contact"].value;
    if (x == null || x == "") {
        alert("Le champ « Fonction » doit-être renseigné.");
        return false;
    }

	var x = document.forms["contact"]["telephone_contact"].value;
    if (x == null || x == "") {
        alert("Le champ « Téléphone » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["contact"]["email_contact"].value;
    if (x == null || x == "") {
        alert("Le champ « Email » doit-être renseigné.");
        return false;
    }
}

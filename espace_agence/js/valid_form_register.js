function validateForm() {
    var x = document.forms["register"]["user"].value;
    if (x == null || x == "") {
        alert("Le champ « Nom d'utilisateur » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["email"].value;
    if (x == null || x == "") {
        alert("Le champ « Email » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["pass"].value;
    if (x == null || x == "") {
        alert("Le champ « Mot de passe » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["pass_1"].value;
    if (x == null || x == "") {
        alert("Le champ « Confirmation du mot de passe » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["nom_agence"].value;
    if (x == null || x == "") {
        alert("Le champ « Nom de l'agence » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["adresse"].value;
    if (x == null || x == "") {
        alert("Le champ « Adresse » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["ville"].value;
    if (x == null || x == "") {
        alert("Le champ « Ville » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["cp"].value;
    if (x == null || x == "") {
        alert("Le champ « Code postal » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["telephone"].value;
    if (x == null || x == "") {
        alert("Le champ « Téléphone » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["site_web"].value;
    if (x == null || x == "") {
        alert("Le champ « Site web » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["ligne_1"].value;
    if (x == null || x == "") {
        alert("Le champ « Ligne de métro » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["station_1"].value;
    if (x == null || x == "") {
        alert("Le champ « Station de métro » doit-être renseigné.");
        return false;
    }
	
	var x = document.forms["register"]["file"].value;
    if (x == null || x == "") {
        alert("Un Logo doit-être ajouté.");
        return false;
    }
}
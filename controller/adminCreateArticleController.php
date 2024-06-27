<?php

require_once('../config/errorConfig.php');

//La super globale $_SERVER permet de récupérer les données de la requête 
//(et des infos) sur le serveur.
//Ici j'utilise la clé REQUEST_METHOD pour savoir si la requête du navigateur
// pour accéder au fichier est "POST"


function isRequestPost() {
	return $_SERVER["REQUEST_METHOD"] === "POST";
}

 if (isRequestPost()) {

	// je récupère la valeur des champs de formulaire envoyé
	// grâce à $_POST, avec en clé le nom du champs à récupérer
    $title = $_POST['title'];
    $content = $_POST['content'];
	$image = $_POST['image'];

	$handle = fopen("../articles.txt", 'a');

	
	$article = "Le titre est : " .$title. ", le contenu est : " .$content." et l'image est : ".$image;

    if ($handle) {
        fwrite($handle, $article);
        fclose($handle);
    } 

}
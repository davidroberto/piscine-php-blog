<main>

<h2>Créer un article : </h2>

<form method="post">

	<div>
		<label> Titre
			<input type="text" name="title" />
		</label>
	</div>

	<div>
		<label> Contenu
			<input type="text" name="content" />
		</label>
	</div>
	
	<div>
		<label> Image
			<input type="text" name="image" />
		</label>
	</div>

	<input type="submit" value="Créer" />

</form>

<!-- 

La super globale $_SERVER permet de récupérer les données de la requête 
(et des infos) sur le serveur.
Ici j'utilise la clé REQUEST_METHOD pour savoir si la requête du navigateur
pour accéder au fichier est "POST"

-->
<?php if ($_SERVER["REQUEST_METHOD"] === "POST") {

	// je récupère la valeur des champs de formulaire envoyé
	// grâce à $_POST, avec en clé le nom du champs à récupérer
    $title = $_POST['title'];
    $content = $_POST['content'];
	$image = $_POST['image'];

?>

	<p><?php echo $title; ?></p>

<?php } ?>


</main>
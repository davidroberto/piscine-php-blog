<?php require_once('../controller/adminCreateArticleController.php'); ?>

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

<?php if (isRequestPost()) { ?>

	<?php if (empty(getFormErrors())) { ?>

		<p>L'article a bien été enregistré</p>

	<?php } else { ?>

		<?php foreach(getFormErrors() as $error) { ?>

			<p><?php echo $error; ?></p>

		<?php }  ?>

	<?php } ?>


<?php } ?>

</main>
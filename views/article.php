<?php require_once('../controller/articleController.php'); ?>

<?php require_once('../partials/header.php'); ?>

<main>

<?php if ($fileContent) { ?>

	<p>Vous avez un article sauvegardé dans votre fichier :</p>

	<p><?php echo $fileContent; ?></p>

<?php } else { ?>

	<p>Vous n'avez pas d'article sauvegardé dans votre fichier</p>

<?php } ?>

</main>

<?php require_once('../partials/sidebar.php'); ?>

<?php require_once('../partials/footer.php'); ?>
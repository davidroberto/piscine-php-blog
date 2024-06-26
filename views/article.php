<?php $fileContent = file_get_contents('../articles.txt'); ?>

<main>

<?php if ($fileContent) { ?>

	<p>Vous avez un article sauvegardé dans votre fichier :</p>

	<p><?php echo $fileContent; ?></p>

<?php } else { ?>

	<p>Vous n'avez pas d'article sauvegardé dans votre fichier</p>

<?php } ?>

</main>
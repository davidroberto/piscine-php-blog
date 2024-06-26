<?php require_once('../controller/indexController.php'); ?>

<?php require_once('../partials/header.php'); ?>

	<main>

	<?php foreach($articles as $article) { ?>

		<?php if ($article['isPublished']) { ?>

				<article>

					<h2> <?php echo $article["title"]; ?> </h2>

					<img src="<?php echo $article["img"]; ?>" />


					<?php if (isStringTooLong($article["content"], 20)) { ?>
						
						<p> <?php echo shortenString($article["content"], 20) ?> </p>
					<?php } else { ?>
						echo <p> <?php echo $article["content"]; ?> </p>

					<?php } ?>

				</article>

			<?php } else { ?>
				<h2> <?php echo $article['title']; ?> : n'est pas publié</h2>
			<?php } ?>
		<?php } ?>

	</main>

	<?php require_once('../partials/sidebar.php'); ?>

	<?php require_once('../partials/footer.php'); ?>


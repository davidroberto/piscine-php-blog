<?php require_once('../config/errorConfig.php'); ?>

<?php require_once('../controller/reviewsController.php'); ?>

<?php require_once('../partials/header.php'); ?>

<main>
	<h2>Les commentaires des utilisateurs :</h2>

	<?php foreach ($reviews as $review) { ?>

		<article>
			<h3>Par <?php echo $review['user']; ?></h3>
			<p>Message : <?php echo $review['message']; ?></p>
			<p>Note : <?php echo $review['rating']; ?> / 5</p>
		</article>

	<?php } ?>

</main>

<?php require_once('../partials/sidebar.php'); ?>

<?php require_once('../partials/footer.php');
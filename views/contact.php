<?php require_once('../controller/contactController.php'); ?>

<?php require_once('../partials/header.php'); ?>

<main>
	<form method="post">
		<label>Nom
			<input type="text" name="lastname" />
		</label>


		<label>Email
			<input type="text" name="email" />
		</label>

		<label>Message
			<input type="text" name="message" />
		</label>

		<input type="submit">
	</form>	

	<?php if (isset($_REQUEST['lastname'])) { ?>

		<?php if (checkIfFormIsValid($_REQUEST)) { ?>

			<p>Merci <?php echo $_REQUEST['lastname'] ?> de votre message. Notre équipe répondra dans les plus brefs délais</p>

		<?php } else { ?>

			<p>Les données ne sont pas bonnes</p>

		<?php } ?> 

	<?php } ?> 

</main>

<?php require_once('../partials/sidebar.php'); ?>

<?php require_once('../partials/footer.php'); ?>


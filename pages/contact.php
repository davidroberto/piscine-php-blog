<?php require_once('../config/errorConfig.php'); ?>

<?php require_once('../partials/header.php'); ?>

<main>
	<form>
		<label>Nom
			<input type="text" name="name" />
		</label>


		<label>Email
			<input type="text" name="email" />
		</label>

		<label>Message
			<input type="text" name="message" />
		</label>

		<input type="submit">
	</form>

</main>

<?php require_once('../partials/sidebar.php'); ?>

<?php require_once('../partials/footer.php'); ?>


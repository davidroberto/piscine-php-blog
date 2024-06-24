<?php require_once('../config/errorConfig.php'); ?>

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


	<?php 


		function checkIfFormIsValid($request) {
			if ( 
				!empty($request['lastname']) && 
				!empty($request['email']) && 
				!empty($request['message']) &&
		
				preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/", $request['email'])
		
			 ) {
				return true;
			 } else {
				return false;
			 }
		}

	?>
	

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


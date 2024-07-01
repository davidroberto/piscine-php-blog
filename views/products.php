<?php require_once('../controller/productsController.php'); ?>

<?php require_once('../partials/header.php'); ?>

<main>

<form>

	<label >Categorie : </label>
	<select name="category">
	<option value="">Nope</option>
		<?php foreach($productCategories as $category) { ?>
			<option value="<?php echo $category; ?>"><?php echo $category; ?></option>
		<?php } ?>

	</select> 

	<label>Prix minimum : </label>
	<input type="number" name="minPrice" min="<?php echo $productMinPrice; ?>" max="<?php echo $productMaxPrice; ?>"/>

	<label>Prix maximum : </label>
	<input type="number" name="maxPrice" min="<?php echo $productMinPrice; ?>" max="<?php echo $productMaxPrice; ?>" />


	<label >Trier par : </label>
	<select name="sort">

		<option value="">Par défaut</option>
		<option value="price">Prix</option>
		<option value="date">Date</option>

	</select>

	<button type="submit">Filtrer</button>

</form>


<a href="http://localhost:8888/piscine-php-tp-blog/views/products.php?">Reset</a>


<h2>Acheter un produit : </h2>

<section class="products">

	<?php foreach($products as $product) { ?>


		<article class="product">

			<h2><?php echo $product['name']; ?></h2>
			<p>Prix : <?php echo $product['price']; ?>e</p>
			<p><?php echo $product['description']; ?> </p>
			<p>Categorie : <?php echo $product['category']; ?> </p>

			<!-- j'utilise la classe Datetime avec le mot clé "new" et je lui passe ?
			 en parametre ma date en chaine de caractères. Datetime créé une "vraie" date
			 que l'on va pouvoir manipuler : afficher uniquement le mois, ou l'année, avec 
			 le format que l'on veut. On peut aussi comparer deux dates (connaitre la plus récente etc)
			 ou encore ajouter x secondes ou x mois à une date.
			 -->
			<?php $createdAtDateTime = new DateTime($product['createdAt']); ?>
			<p>Date de création : <?php echo $createdAtDateTime->format("d-m-Y"); ?></p>

		</article>


	<?php } ?>

</section>


</main>

<?php require_once('../partials/sidebar.php'); ?>

<?php require_once('../partials/footer.php'); ?>
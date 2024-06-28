<?php require_once('../controller/productsController.php'); ?>

<?php require_once('../partials/header.php'); ?>

<main>

<form>

	<label >Categorie : </label>
	<select name="category">

		<?php foreach($productCategories as $category) { ?>
			<option value="">Nope</option>
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

	</select>

	<button type="submit">Filtrer</button>

</form>





<h2>Acheter un produit : </h2>

<section class="products">

	<?php foreach($products as $product) { ?>


		<article class="product">

			<h2><?php echo $product['name']; ?></h2>
			<p>Prix : <?php echo $product['price']; ?>e</p>
			<p><?php echo $product['description']; ?> </p>
			<p>Categorie : <?php echo $product['category']; ?> </p>

		</article>


	<?php } ?>

</section>


</main>

<?php require_once('../partials/sidebar.php'); ?>

<?php require_once('../partials/footer.php'); ?>
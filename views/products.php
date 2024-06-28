<?php require_once('../controller/productsController.php'); ?>

<?php require_once('../partials/header.php'); ?>

<main>

<form>

		<label >Categorie : </label>
		<select name="category">
			<option value="electro-menager">Electro-menager</option>
			<option value="informatique">Informatique</option>
			<option value="sport">Sport</option>
		</select>

		<label>Prix minimum : </label>
		<input type="number" name="minPrice" />

		<label>Prix maximum : </label>
		<input type="number" name="maxPrice" />

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
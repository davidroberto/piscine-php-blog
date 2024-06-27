<?php require_once('../controller/productsController.php'); ?>

<?php require_once('../partials/header.php'); ?>

<main>


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
<?php

require_once('../config/errorConfig.php');

$products = [
	[
		'name' => 'Aspirateur',
		'price' => 100,
		'category' => 'electro-menager',
		'description' => 'Description du produit 1',
	],
	[
		'name' => 'Frigo',
		'price' => 200,
		'category' => 'electro-menager',
		'description' => 'Description du produit 2',
	],
	[
		'name' => 'Four',
		'price' => 300,
		'category' => 'electro-menager',
		'description' => 'Description du produit 3',
	],
	[
		'name' => 'Télévision',
		'price' => 400,
		'category' => 'electro-menager',
		'description' => 'Description du produit 4',
	],
	[
		'name' => 'Ordinateur',
		'price' => 500,
		'category' => 'informatique',
		'description' => 'Description du produit 5',
	],
	[
		'name' => 'Tablette',
		'price' => 600,
		'category' => 'informatique',
		'description' => 'Description du produit 6',
	],
	[
		'name' => 'Smartphone',
		'price' => 700,
		'category' => 'informatique',
		'description' => 'Description du produit 7',
	],
	[
		'name' => 'Appareil photo',
		'price' => 800,
		'category' => 'informatique',
		'description' => 'Description du produit 8',
	],
	[
		'name' => 'Vélo',
		'price' => 900,
		'category' => 'sport',
		'description' => 'Description du produit 9',
	],
	[
		'name' => 'Tapis de course',
		'price' => 1000,
		'category' => 'sport',
		'description' => 'Description du produit 10',
	],
	[
		'name' => 'Haltères',
		'price' => 1100,
		'category' => 'sport',
		'description' => 'Description du produit 11',
	],
	[
		'name' => 'Ballon de foot',
		'price' => 1200,
		'category' => 'sport',
		'description' => 'Description du produit 12',
	]
];



if (!empty($_GET)) {
	// filtrer les produits, pour récupérer que ceux qui ont la catégorie de l'url

	// j'utilise array filter qui permet de faire une boucle sur tous les produits
	// et de ne récupérer que ceux qui valident ma fonction de callback
	$products = array_filter($products, function($product) {
		// pour chaque tour de boucle (pour chaque produit)
		// je regarde si la catégorie du produit est la même
		// que celle dans l'url (le parametre GET)
		return $product['category'] === $_GET['category'];
	});

}



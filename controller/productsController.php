<?php

require_once('../config/errorConfig.php');

$products = [
	
	[
		'name' => 'Frigo',
		'price' => 200,
		'category' => 'electro-menager',
		'description' => 'Description du produit 2',
	],
	[
		'name' => 'Vélo',
		'price' => 900,
		'category' => 'sport',
		'description' => 'Description du produit 9',
	],
	[
		'name' => 'Four',
		'price' => 300,
		'category' => 'electro-menager',
		'description' => 'Description du produit 3',
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
		'name' => 'Télévision',
		'price' => 400,
		'category' => 'electro-menager',
		'description' => 'Description du produit 4',
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
		'name' => 'Tapis de course',
		'price' => 1000,
		'category' => 'sport',
		'description' => 'Description du produit 10',
	],
	[
		'name' => 'Aspirateur',
		'price' => 100,
		'category' => 'electro-menager',
		'description' => 'Description du produit 1',
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


if (!empty($_GET['category'])) {
	$products = array_filter($products, function($product) {
		return $product['category'] === $_GET['category'];
	});
}

if (!empty($_GET['minPrice'])) {
	$products = array_filter($products, function($product) {
		return $product['price'] >= (float)$_GET['minPrice'];
	});
}

if (!empty($_GET['maxPrice'])) {
	$products = array_filter($products, function($product) {
		return $product['price'] <= (float)$_GET['maxPrice'];
	});
}


$productCategories = [];

foreach($products as $product) {

	if (!in_array($product['category'], $productCategories)) {
		$productCategories[] = $product['category'];
	}

}

$productMinPrice = $products[0]['price'];

foreach($products as $product) {
	if ($product['price'] < $productMinPrice) {
		$productMinPrice = $product['price'];
	}
}


$productMaxPrice = $products[0]['price'];

foreach($products as $product) {
	if ($product['price'] > $productMaxPrice) {
		$productMaxPrice = $product['price'];
	}
}


// si j'ai un parametre GET "sort" et qu'il est égal à "price"
if (isset($_GET['sort']) && $_GET['sort'] === 'price') {

	// alors j'utilise la fonction PHP usort qui permet de trier un tableau
	// je trie en fonction du prix
	// usort ne retourne pas de nouveau tableau, mais modifie le tableau
	// original ($products)
	usort($products, function ($a, $b) {
		return $a['price'] <=> $b['price'];
	});
}
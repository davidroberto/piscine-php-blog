<?php

require_once('../config/config.php');

$products = [
	
	[
		'name' => 'Frigo',
		'price' => 200,
		'category' => 'electro-menager',
		'description' => 'Description du produit 2',
		'createdAt' => "10-03-2024"
	],
	[
		'name' => 'Vélo',
		'price' => 900,
		'category' => 'sport',
		'description' => 'Description du produit 9',
		'createdAt' => "22-03-2022"
	],
	[
		'name' => 'Four',
		'price' => 300,
		'category' => 'electro-menager',
		'description' => 'Description du produit 3',
		'createdAt' => "22-03-2027"
	],
	
	[
		'name' => 'Ordinateur',
		'price' => 500,
		'category' => 'informatique',
		'description' => 'Description du produit 5',
		'createdAt' => "23-10-2024"
	],
	[
		'name' => 'Tablette',
		'price' => 600,
		'category' => 'informatique',
		'description' => 'Description du produit 6',
		'createdAt' => "22-03-2024"
	],
	[
		'name' => 'Télévision',
		'price' => 400,
		'category' => 'electro-menager',
		'description' => 'Description du produit 4',
		'createdAt' => "01-07-2024"
	],
	[
		'name' => 'Smartphone',
		'price' => 700,
		'category' => 'informatique',
		'description' => 'Description du produit 7',
		'createdAt' => "22-03-2024"
	],
	[
		'name' => 'Appareil photo',
		'price' => 800,
		'category' => 'informatique',
		'description' => 'Description du produit 8',
		'createdAt' => "22-03-2028"
	],

	[
		'name' => 'Tapis de course',
		'price' => 1000,
		'category' => 'sport',
		'description' => 'Description du produit 10',
		'createdAt' => "22-03-2021"
	],
	[
		'name' => 'Aspirateur',
		'price' => 100,
		'category' => 'electro-menager',
		'description' => 'Description du produit 1',
		'createdAt' => "22-03-2024"
	],
	[
		'name' => 'Haltères',
		'price' => 1100,
		'category' => 'sport',
		'description' => 'Description du produit 11',
		'createdAt' => "22-03-2024"
	],
	[
		'name' => 'Ballon de foot',
		'price' => 1200,
		'category' => 'sport',
		'description' => 'Description du produit 12',
		'createdAt' => "22-03-2024"
	]
];

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

if (isset($_GET['sort']) && $_GET['sort'] === 'price') {

	usort($products, function ($currentProduct, $nextProduct) {
		return $currentProduct['price'] <=> $nextProduct['price'];
	});
}


if (isset($_GET['sort']) && $_GET['sort'] === 'date') {

	usort($products, function ($currentProduct, $nextProduct) {
		$currentProductCreatedAt = new DateTime($currentProduct['createdAt']);
		$nextProductCreatedAt = new DateTime($nextProduct['createdAt']);

		return $currentProductCreatedAt <=> $nextProductCreatedAt;
	});
}

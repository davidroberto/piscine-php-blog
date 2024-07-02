<?php

class Order {
	private $status;

	private $totalPrice;

	private $productQty;

	function __construct() {
		$this->status = "en cours";
		$this->totalPrice = 0;
		$this->productQty = 0;
	}

	public function pay() {
		$this->status = "payé";
	}


	public function cancel() {
		$this->status = "annulé";
	}

	public function addProduct() {
		$this->productQty = $this->productQty + 1;
		$this->totalPrice = $this->totalPrice + 10;
	}

}

// quand je veux créer une nouvelle commande
// j'instancie (je créé un objet) la classe Order grâce au mot clé new
// Quand je créé un objet de type order avec le mot clé new
// la fonction constructor est automatiquement appelée
// permettant (si besoin) d'initialiser la commande avec des propriétés par défaut



var_dump($order);

$order2 = new Order();
$order2->addProduct();
$order2->pay();






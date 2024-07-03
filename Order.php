<?php

class Order {
	private $status;

	private $totalPrice;

	private $productQty;

	private $id;

	private $customer;

	function __construct($customerName) {
		$this->status = "en cours";
		$this->totalPrice = 0;
		$this->productQty = 0;
		$this->id = uniqid();
		$this->customer = $customerName;

	}

	public function pay() {
		if ($this->status === "en cours" && 
			$this->productQty > 0 &&
			$this->totalPrice > 0
		) {
			$this->status = "payé";
		}
	}


	public function cancel() {
		if ($this->status === "en cours" && 
			$this->productQty > 0 &&
			$this->totalPrice > 0
		) {
			$this->status = "annulé";
			$this->productQty = 0;
			$this->totalPrice = 0;
		}
	}

	public function addProduct() {
		
		if ($this->status === "en cours") {
			$this->productQty = $this->productQty + 1;
			$this->totalPrice = $this->totalPrice + 10;
		}

	}

	public function removeProduct() {
		if ($this->status === "en cours" && $this->productQty > 0 && $this->totalPrice > 0) {
			$this->productQty = $this->productQty - 1;
			$this->totalPrice = $this->totalPrice - 10;
		}
	}

}


// quand je veux créer une nouvelle commande
// j'instancie (je créé un objet) la classe Order grâce au mot clé new
// Quand je créé un objet de type order avec le mot clé new
// la fonction constructor est automatiquement appelée
// permettant (si besoin) d'initialiser la commande avec des propriétés par défaut



$order = new Order("David Robert");
var_dump($order);

// $order2 = new Order();
// var_dump($order2);








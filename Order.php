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












// class vendorMachine {

// 	private $snacks;

// 	private $cashAmount;

// 	private $isOn;

// 	function __construct() {
// 		$this->snacks = [
// 			[
// 				"name" => "Snickers",
// 				"price" => 1,
// 				"quantity" => 5
// 			],
// 			[
// 				"name" => "Mars",
// 				"price" => 1.5,
// 				"quantity" => 5
// 			],
// 			[
// 				"name" => "Twix",
// 				"price" => 2,
// 				"quantity" => 5
// 			],
// 			[
// 				"name" => "Bounty",
// 				"price" => 2.5,
// 				"quantity" => 5
// 			]
// 		];

// 		$this->cashAmount = 0;
// 	}

// 	function turnOn() {
// 		// allume la machine 
// 	}

// 	function turnOff() {

// 		// s'il est après 18h (on ne peux pas éteindre la machine avant 18h)

// 		// éteint la machine
// 	}

// 	function buySnack($snackName) {

// 		// si la machine est allumée

// 		// si le snack est présent dans la liste
// 		// et que la quantité est suffisante
// 		// on enlève une quantité pour ce snack
// 		// et on ajoute au cashAmount le montant du snack

// 	}

// 	function shootWithFoot() {

// 		// si la machine est allumée

// 		// fais tomber un snack au hasard
// 		// et fait tomber un montant de cash au hasard
// 		//donc decremente le snack et le cashAmount
// 	}
// }
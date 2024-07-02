<?php

class Order {
	public $status;


	function __construct() {
		$this->status = "en cours";
	}

	public function pay() {
		$this->status = "payé";
	}


	public function cancel() {
		$this->status = "annulé";
	}


}


// quand je veux créer une nouvelle commande
// j'instancie (je créé un objet) la classe Order grâce au mot clé new
// Quand je créé un objet de type order avec le mot clé new
// la fonction constructor est automatiquement appelée
// permettant (si besoin) d'initialiser la commande avec des propriétés par défaut
$order = new Order();
var_dump($order?status);


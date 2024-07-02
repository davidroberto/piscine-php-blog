<?php

class Order {
	public $status;


	public function pay() {
		$this->status = "payé";
	}


	public function cancel() {
		$this->status = "annulé";
	}

}


$order = new Order();

$order->pay();
$order->cancel();


var_dump($order->status);
<?php


class VendorMachine {

	private $snacks;

	private $cashAmount;

	private $isOn;


	function __construct() {
		$this->snacks = [
            [
                "name" => "Snickers",
                "price" => 1,
                "quantity" => 5
            ],
            [
                "name" => "Mars",
                "price" => 1.5,
                "quantity" => 5
            ],
            [
                "name" => "Twix",
                "price" => 2,
                "quantity" => 5
            ],
            [
                "name" => "Bounty",
                "price" => 2.5,
                "quantity" => 5
            ]
        ];

		$this->isOn = false;
		$this->cashAmount = 0;
	}


	public function turnOn() {
		$this->isOn = true;
	}

	public function turnOff() {

		$dateNow = new DateTime();
		$hourNow = (int)$dateNow->format('H');

		if ($hourNow > 14) {
			$this->isOn = false;
		}
	}


	public function buySnack($snackName) {
		if ($this->isOn) {
			foreach ($this->snacks as $key => $snack) {
				if ($snack['name'] === $snackName && $snack['quantity'] > 0) {
					$this->snacks[$key]['quantity'] = $this->snacks[$key]['quantity'] - 1;
				
					$this->cashAmount = $this->cashAmount + $snack['price']; 
				}
			}
		}
	}

	public function shootWithFoot() {

		$randomSnack = $this->findAvailableSnack();
		$randomSnack['quantity'] -= 1;
		
		$randomCashAmountNotRounded = rand(0, $this->cashAmount * 100) / 100;
		$randomCashAmount = round($randomCashAmountNotRounded, 2);

		$this->cashAmount = round($this->cashAmount - $randomCashAmount, 2);
	}


	private function findAvailableSnack() {

		$randomSnackIndex = random_int(0, count($this->snacks) - 1);

		if ($this->snacks[$randomSnackIndex]['quantity'] > 0) {
			return $this->snacks[$randomSnackIndex];
		} else {
			return $this->findAvailableSnack();
		}
	}


}

$vendorMachine = new VendorMachine();
$vendorMachine->turnOn();
$vendorMachine->buySnack('Mars');
$vendorMachine->shootWithFoot();
// var_dump($vendorMachine);
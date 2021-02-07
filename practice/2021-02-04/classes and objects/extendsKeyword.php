<?php

//basic concepts

class BankAccount
{
	public $balance = 10;
	
	function displayBalance () {
		return '<br>Balance '.$this->balance;
	}

	function withDraw ($amount) {
		if ($this->balance < $amount) {
			echo ' Not enough money ';
		} else {
			$this->balance = $this->balance - $amount;
	
		}
	}

	public function deposit ($amount) {
		$this->balance = $amount + $this->balance;
	}
}

class SavingAccount extends BankAccount{

	public $type = '18-25';

}

$a = new SavingAccount;
echo "a's type ".$a->type." balance :".$a->displayBalance();


?>
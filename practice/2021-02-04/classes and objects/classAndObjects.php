<?php

//basic concepts

class BankAccount
{
	public $balance = 0;
	function __construct($bal)
	{
		$this->balance = $bal;
		}
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

$v = new BankAccount(10);
echo 'v balance :'.$v->displayBalance();
$v->withDraw(5);
echo '<br>After withdrawal';
echo $v->displayBalance();
$v->deposit(500);
echo '<br>After deposit';
echo $v->displayBalance();

$f = new BankAccount(50);
echo '<br>f balance :'.$f->displayBalance();

?>
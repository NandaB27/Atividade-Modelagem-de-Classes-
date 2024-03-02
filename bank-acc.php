<?php

class BankAccount {
    public $accNumber;
    
    public $owner;

    public $balance;

    public $withdrawl;

    public $deposit;

    public $newbalance;

    public function __construct($accNumber, $owner) {
        $this->accNumber = $accNumber;
        $this->owner = $owner;
        $this->balance = 0;
    }

    public function changeOwner($owner){
        $this->owner = $owner;
    }

    public function showOwner(){
        echo "The owner of the bank account is $this->owner";
    }

    public function Deposit($deposit) {
        $this->balance = $this->balance + $deposit;
        return $this->balance;
    }

    public function Withdrawl($withdrawl) {
        if($this->balance - $withdrawl <= 0) {
            echo "Impossible to withdrawl from an empty account.";
        } else {
            $this->balance = $this->balance - $withdrawl;
            return $this->balance;
        }
    }

    public function ShowBalance() {
        echo "Balance: " . $this->balance;
    }
}
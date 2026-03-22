<?php
class Bank{
    private $name;
    private $acc_num;
    private $balance;

    public function __construct($name){
        $this->name = $name;
        $this->balance = 0; 
    }

    public function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
        }
    }

    public function getBalance(){
        return $this->balance;
    }

    public function getName(){
        return $this->name;
    }
}

$user1 = new Bank("Abe");
$user1->deposit(1000);

echo $user1->getName();
echo $user1->getBalance();
?>
<?php 

require('./contador.php');

require('./ball.php');

require('./bank-acc.php');

require('./calculator.php');

require('./gaspump.php');

require('./car.php');

echo "Counter:";
echo "<br>";

$myCounter = new Counter();

$myCounter->Add();

$myCounter->Add();

$myCounter->Add();

$myCounter->Add();

$myCounter->Reset();

$myCounter->ShowValue();

echo "<br>";
echo "<br>";
echo "<br>";


echo "Ball:";
echo "<br>";

$firstBall = new Ball("Violet","Rounded", "Rubber");

$firstBall->ShowColor();
echo "<br>";

$firstBall->changeColor("Yellow");

echo "Now:";
echo "<br>";

$firstBall->ShowColor();
echo "<br>";
echo "<br>";
echo "<br>";


echo "Bank Account:";

$myAcc = new BankAccount(07,"Nalanda");

$myAcc->ShowBalance();
echo "<br>";
echo "<br>";
$myAcc->showOwner();
echo "<br>";
echo "After";
$myAcc->changeOwner("Mauro");
echo "<br>";
$myAcc->showOwner();
echo "<br>";
$myAcc->Deposit(100);
echo "Deposit of 100.";
echo "<br>";
$myAcc->ShowBalance();
echo "<br>";
$myAcc->Deposit(100);
$myAcc->ShowBalance();
$myAcc->Withdrawl(150);
echo "<br>";
$myAcc->ShowBalance();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Calculator:";

$myCalculator = new Calculator();
$myCalculator->Add(1,4);
$myCalculator->History();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "GasPump:";

$myPump = new gasPump();
$myPump->fuelbyPrice(50);
echo "<br>";
$myPump->fuelbyGallons(20);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Car:";
echo "<br>";
echo "<br>";
$KiaNiro = new Car();
$KiaNiro->GetFuel();
echo "<br>";
$KiaNiro->GoFuel(50);
echo "<br>";
$KiaNiro->Drive(2);
<?php

file_put_contents('id.txt', 0);

require_once 'Cow.php';
require_once 'Chicken.php';

$cows = new Cow(10);
$chickens = new Chicken(20);
echo "\nНа ферме:\n";
echo 'Коров: ' . $cows->countAnimals . "\n";
echo 'Кур: ' . $chickens->countAnimals . "\n";

echo "За день:\n";
echo 'Коровы дали: ' . $cows->giveProduct() . " молока\n";
echo 'Куры дали: ' . $chickens->giveProduct() . " яиц\n";

echo "За неделю:\n";
echo 'Коровы дали: ' . $cows->giveProduct() * 7 . " молока\n";
echo 'Куры дали: ' . $chickens->giveProduct() * 7 . " яиц\n";

echo "\nСъездили на рынок, купили животных:\n";
$cows2 = new Cow(1);
$chickens2 = new Chicken(5);
echo "\nКоров: " . $cows2->countAnimals . "\n";
echo 'Кур: ' . $chickens2->countAnimals . "\n";

echo "\nНа ферме:\n";
$countCows = $cows->countAnimals + $cows2->countAnimals;
$countChickens = $chickens->countAnimals + $chickens2->countAnimals;
echo "Коров: " . $countCows . "\n";
echo "Кур: " . $countChickens . "\n";

echo "За неделю:\n";
$countMilk = $cows->giveProduct() + $cows2->giveProduct();
$countEgg = $chickens->giveProduct() + $chickens2->giveProduct();
echo 'Коровы дали: ' . $countMilk * 7 . " молока\n";
echo 'Куры дали: ' . $countEgg * 7 . ' яиц';

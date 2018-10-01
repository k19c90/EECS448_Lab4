<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];

echo "Question 1: Who won the 2018 NBA Rookie of the Year Award?" . "<br>";
echo "You answered: " . $q1 . "<br>";
echo "The correct answer is: Ben Simmons" . "<br>";

echo "Question 2: Who won the 2018 NBA Most Valuable Player Award?" . "<br>";
echo "You answered: " . $q2 . "<br>";
echo "The correct answer is: James Harden" . "<br>";

echo "Question 3: Who won the 2018 NBA Most Imporved Player Award?" . "<br>";
echo "You answered: " . $q3 . "<br>";
echo "The correct answer is: Victor Oladipo" . "<br>";

echo "Question 4: Who won the 2018 NBA Defensive Player of the Year Award?" . "<br>";
echo "You answered: " . $q4 . "<br>";
echo "The correct answer is: Rudy Gobert" . "<br>";

echo "Question 5: Who won the 2018 NBA Sixth Man Award?" . "<br>";
echo "You answered: " . $q5 . "<br>";
echo "The correct answer is: Lou Williams" . "<br>";

$answers = 0;
if($q1 == "Ben Simmons")
{
    $answers++;
}
if($q2 == "James Harden")
{
    $answers++;
}
if($q3 == "Victor Oladipo")
{
    $answers++;
}
if($q4 == "Rudy Gobert")
{
    $answers++;
}
if($q5 == "Lou Williams")
{
    $answers++;
}

$score = ($answers / 5) * 100;
echo "You got " . $answers . " out of 5 answers correct. Final Grade: " . $score .  "%";
?>
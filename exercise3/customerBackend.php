<?php
echo "<body style='background-color:pink'>";

$username = $_POST["username"];
$password = $_POST["password"];
$forks = $_POST["fork"];
$spoons = $_POST["spoon"];
$knives = $_POST["knife"];
$shipping = $_POST["shipping"];

echo "Welcome, your username is: " . $username . "<br>";
echo "Your password is: " . $password . "<br>";
echo"You bought " . $forks . " forks(s)" . "<br>";
echo"You bought " . $spoons . " spoon(s)" . "<br>";
echo"You bought " . $knives . " fork(s)" . "<br>";
echo"You chose " . $shipping . " shipping" . "<br>";

$total = $forks * 2 + $spoons * 1 + $knives * 3;

if($shipping == "free")
{
    $total = $total;
}
else if($shipping == "3Day")
{
    $total = $total + 5;
}
else if($shipping == "overnight")
{
    $total = $total + 50;
}
echo"Your total: $" . $total . "<br>";

 ?>
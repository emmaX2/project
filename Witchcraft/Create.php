<?php

$firstname = "Joram";

$age = 18;

echo "mijn voornaam is: " . $firstname . "en mijn leeftijd is: " . $age ."<br>";

$_username = array(1, "Joram", "van", "Buuren", "Ermelo");

echo "mijn id is: " . $_username[0]; "<br>";
echo "mijn voornaam is: " . $_username[1]; "<br>"; 
echo "mijn tussenvoegsel is: " . $_username[2]; "<br>";
echo "mijn achternaam is: " . $_username[3]; "<br>";
echo "mijn woonplaats is: " . $_username[4]; "<br>";

$_username = array("id" => 1,"firstname" => "Joram","infix" => "van","lastname" => "Buuren","city" => "Ermelo");

//echo "mijn id is: " . $_username["id"]; "<br>";
//echo "mijn voornaam is: " . $_username["firstname"]; "<br>"; 
//echo "mijn tussenvoegsel is: " . $_username["lastname"]; "<br>";
//echo "mijn achternaam is: " . $_username["email"]; "<br>";
//echo "mijn woonplaats is: " . $_username["city"]; "<br>";

//echo "<hr>";
//echo $_POST["firstname"] . "<br>";

var_dump($_username);

echo "<hr>";

var_dump($_POST);

echo"<hr>";

?>

<?php
in
$server = "localhost";
$username = "root";
$password = "";
$dbname = "witchcraft";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$geboortedatum = $_POST["geboortedatum"];
$telefoonnummer = $_POST["telefoonnummer"];

$conn = mysqli_connect($server, $username, $password, $dbname);

$sql = "INSERT INTO  `student` (`id`, 
                                `firstname`,
                                `lastname`,
                                `email`,
                                `geboortedatum`,
                                `telefoonnummer`)
                                VAlUES (NULL,
                                '$firstname',
                                '$lastname',
                                '$email',
                                '$geboortedatum',
                                '$telefoonnummer')";
// echo $sql; exit();
mysqli_query($conn, $sql);

header("Location: ./inschrijven.php");    

?>
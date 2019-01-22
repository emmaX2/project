<?php
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
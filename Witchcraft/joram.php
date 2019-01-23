<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "witchcraft";

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$geboortedatum = $_POST["geboortedatum"];
$telefoonnummer = $_POST["telefoonnummer"];
        

$conn = mysqli_connect($server, $username, $password, $dbname);

$sql = "INSERT INTO  `student` (`id`, 
                                `voornaam`,
                                `achternaam`,
                                `email`,
                                `geboortedatum`,
                                `telefoonnummer`)
                                VAlUES (NULL,
                                '$voornaam',
                                '$achternaam',
                                '$email',
                                '$geboortedatum',
                                '$telefoonnummer')";
// echo $sql; exit();

mysqli_query($conn, $sql);

header("Location: ./inschrijven.php");    

?>
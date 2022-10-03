<?php 

$data = [
    "firstname" => $_POST['firstname'],
    "lastname" => $_POST['lastname']
];

$connection = new PDO('mysql:host=localhost;dbname=base1', 'Avramchik', '25A27z13c0706');
$sql = 'INSERT INTO info (firstname, lastname) VALUES (:firstname, :lastname)';
$statement = $connection->prepare($sql); 
$result = $statement->execute($data);
var_dump($result);
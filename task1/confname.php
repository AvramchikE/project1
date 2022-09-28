<?php
try{
    $conn = new PDO( "mysql:host=localhost;dbname=base1", 'AvramchikE', '25A27z13c0706');
   
    if (empty($_POST['fname'])) exit("Поле 1 не заповнено");
    if (empty($_POST['lname'])) exit("Поле 2 не заповнено");

    $query = "INSERT INTO info VALUES (:fname, :lname)";
    $msg = $conn->prepare($query);
    $msg->execute(array(":fname" => $_POST["fname"], ":lname" => $_POST["lname"]));

  

           header("Location: formname.html");
}
catch (PDOException $e)
{
    echo "error" .$e->getMessage();
}

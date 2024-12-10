<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $id_client = trim(htmlspecialchars($_POST['id_client']));
    $id_voiture = trim(htmlspecialchars($_POST['id_voiture']));
    $date_debut = trim(htmlspecialchars($_POST['date_debut']));
    $date_fin = trim(htmlspecialchars($_POST['date_fin']));
    $total = trim(htmlspecialchars($_POST['total']));
  
    $connection = new mysqli("localhost","root","yassir","gorent");
    if($connection->connect_error) {
        die("". $connection->connect_error);
    } 

$query =  $connection->query("INSERT INTO contracts (Client_ID, Car_ID, Start_Date, End_Date, Total) 
                                VALUES ('$id_client', '$id_voiture', '$date_debut', '$date_fin', '$total')");
    header("Location: ../pages/contrats.php");

}
?>
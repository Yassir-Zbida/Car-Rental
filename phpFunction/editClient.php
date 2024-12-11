<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $clientId = intval($_POST['client-id']);
    $firstName = trim(htmlspecialchars($_POST['first-name']));
    $lastName = trim(htmlspecialchars($_POST['last-name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $phone = trim(htmlspecialchars($_POST['phone']));
    $address = trim(htmlspecialchars($_POST['address']));

    $connection = new mysqli("localhost", "root", "yassir", "gorent");
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $query = $connection->prepare("UPDATE clients SET First_Name = ?, Last_Name = ?, Email = ?, Phone = ?, Address = ? WHERE id = ?");
    $query->bind_param("sssssi", $firstName, $lastName, $email, $phone, $address, $clientId);

    if ($query->execute()) {
        header("Location: ../pages/clients.php");
    } else {
        echo "Error: " . $query->error;
    }
}
?>

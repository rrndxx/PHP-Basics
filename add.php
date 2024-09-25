<?php
require_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];

    try {
        $connection = $newConnection->openConnection(); // Get connection
        $stmnt = $connection->prepare("INSERT INTO students_table (first_name, last_name, email, gender, birthdate, `address`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmnt->execute([$firstname, $lastname, $email, $gender, $birthdate, $address]); // Execute insert query

        // Redirect back to the form or display a success message
        header("Location: sample.php"); // Replace with the actual name of your main page
        exit;
    } catch (PDOException $e) {
        // Handle error
        echo "Error: " . $e->getMessage();
    }
}

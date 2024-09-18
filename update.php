<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sampledatabase";

    $db = "mysql:host=$host;dbname=$dbname";

    $connection = new PDO($db,$user,$pass);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    $id = 19;
    $fname = "Roxanne";
    $lname = "Mercader";
    $age = 18;
    $gender = "Female";

//CREATE NEW DATA
    $sql = "UPDATE students_table SET firstname = ?, lastname = ?, age = ?, gender = ? WHERE ID = ?";
    $stmnt = $connection->prepare($sql);
    $stmnt->execute([$fname, $lname, $age, $gender, $id]);

//SELECT ALL DATA
    $stmnt = $connection->query("SELECT * FROM students_table");
    
    while($row = $stmnt->fetch()){
        echo $row['ID']. "  ".$row['firstname']. "  ".$row['lastname']. "  ".$row['age']. "  ".$row['gender']. "<br>";
    }
?>

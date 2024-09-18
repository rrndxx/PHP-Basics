<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sampledatabase";

    $db = "mysql:host=$host;dbname=$dbname";

    $connection = new PDO($db,$user,$pass);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    $id = 20;

//DELETE A DATA
    $sql = "DELETE FROM students_table WHERE ID = ?";
    $stmnt = $connection->prepare($sql);
    $stmnt->execute([$id]);

//SELECT ALL DATA
    $stmnt = $connection->query("SELECT * FROM students_table");
    
    while($row = $stmnt->fetch()){
    echo $row['ID']. "  ".$row['firstname']. "  ".$row['lastname']. "  ".$row['age']. "  ".$row['gender']. "<br>";
}
?>

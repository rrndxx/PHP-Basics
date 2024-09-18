<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendyll Ryan Cabardo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./Assets/logo.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
</head>

<body> -->
<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "sampledatabase";

    //data source name
    $db = "mysql:host=$host;dbname=$dbname";

    $connection = new PDO($db, $user, $password);

    $statement = $connection->query('SELECT * FROM mock_data');

    // while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['first_name'] . " " . $row['last_name'] . "<br>";
// }
    
    // while($row = $statement->fetch(PDO::FETCH_OBJ)){
//     echo $row->first_name. " ". $row->last_name. "<br>";
// }
    

    // $stmt = $connection->prepare('SELECT * FROM sample_data');
// $stmt->execute();
    

    // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // echo '<pre>'; // Optional: to format the output
// print_r($results);
// echo '</pre>';
    

    $gender = "Male";

    //Positional Parameters
    $sql = "SELECT * FROM mock_data WHERE gender = ?";
    $stmnt = $connection->prepare($sql);
    $stmnt->execute([$gender]);
    $users = $stmnt->fetchAll();

    foreach ($users as $user) {
        echo $user['first_name'] . " " . $user['last_name'] . " " . $user['gender'] . "<br>";
    }

    ?>

<?php
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "sampledatabase";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO students_table (firstname, lastname, age, gender) VALUES ('Rendyll', 'Cabardo', '20', 'Male')";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "New record created successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sampledatabase";

    $db = "mysql:host=$host;dbname=$dbname";

    $connection = new PDO($db,$user,$pass);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    // $fname = "Rendyll";
    // $lname = "Cabardo";
    // $age = 20;
    // $gender = "Male";

//CREATE NEW DATA
    $sql = "INSERT INTO students_table(`firstname`, `lastname`, `age`, `gender`) VALUES(?, ?, ?, ?)";
    $stmnt = $connection->prepare($sql);
    $stmnt->execute([$fname, $lname, $age, $gender]);

//SELECT ALL DATA
    $stmnt = $connection->query("SELECT * FROM students_table");
    
    while($row = $stmnt->fetch()){
        echo $row['ID']. "  ".$row['firstname']. "  ".$row['lastname']. "  ".$row['age']. "  ".$row['gender']. "<br>";
    }
?>

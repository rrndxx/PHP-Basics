<!DOCTYPE html>
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

<body>
    <?php

    $name = "Rendyll Ryan Cabardo";
    $num1 = 16.6;
    $num2 = 5;

    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;
    $quotient = $num1 / $num2;

    echo "<center> <br>$name <br> <br> <br>";
    echo "The sum of the two numbers is $sum <br>";
    echo "The difference between the two numbers is $difference <br>";
    echo "The product between the two numbers is $product <br>";
    echo "The quotient between the two numbers is $quotient <br>";
    echo "The square root of the 1st number is " . sqrt($num1);

    ?>
</body>

</html>
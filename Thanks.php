<?php
require 'val.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks!</title>
</head>
<body>
    <h1>Thank you for your card details!</h1>
    <p>We will use your card for its intended purpose.</p>
    <p>Card details:</p><br>

    <?php
    echo "First Name" . ": " . $fname . " (" . mb_strlen($fname) . " characters)<br><br>";
    echo "Last Name" . ": " . $lname . " (" . mb_strlen($lname) . " characters)<br><br>";
    echo "Card Number" . ": " . $cnumber . " (" . mb_strlen($cnumber) . " characters)<br><br>";
    echo "Card Date" . ": " . $cdate . " (" . mb_strlen($cdate) . " characters)<br><br>";
    echo "CVC/CVV Code" . ": " . $cvvcode . " (" . mb_strlen($cvvcode) . " characters)<br><br>";
    echo "Gender" . ": " . $gender . " (" . mb_strlen($gender) . " characters)<br><br>";
    ?>

</body>
</html>

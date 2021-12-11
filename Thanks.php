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
    $dat_arr = array("First name" => (string) $_POST['fname'], "Last name" => (string) $_POST['lname'],
        "Card number" => (string) $_POST['cnumber'], "Card date" => (string) $_POST['cdate'],
        "CVC/CVV code" => (string) $_POST['cvvcode'], "Your gender" => (string) $_POST['gender']);
    foreach($dat_arr as $x => $value) {
        if($value){
            echo $x . ": " . $value . " (" . mb_strlen($value) . " characters)<br><br>";
        }
    }
    ?>

</body>
</html>

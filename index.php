<?php
include 'val.php';
//include 'Thanks.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <fieldset>
            <h2 class="form__title">Form</h2>
            <legend>Please enter your card data:</legend>

            <div class="form__part">
                <input class="form__input" placeholder = " " type="text" id="fname" name="fname" value="<?php echo $_POST['fname']?>"  ><br>
                <label class="form__label" for="fname">First name:</label><br><br>
                <?php echo $errors['fname'];?>
            </div>

            <div class="form__part">
                <input class="form__input" placeholder = " " type="text" id="lname" name="lname" value="<?php echo $_POST['lname']?>"><br>
                <label class="form__label" for="lname">Last name:</label><br><br>
                <?php echo $errors['lname'];?>
            </div>

            <div class="form__part">
                <input class="form__input" placeholder = " " type="text" id="cnumber" name="cnumber" value="<?php echo $_POST['cnumber']?>"><br>
                <label class="form__label" for="cnumber">Card Number:</label><br><br>
                <?php echo $errors['cnumber'];?>
            </div>

            <div class="form__part">
                <input class="form__input" placeholder = " " type="date" id="cdate" name="cdate" value="<?php echo $_POST['cdate']?>"><br>
                <label class="form__label" for="cdate">Card Date:</label><br><br>
                <?php echo $errors['cdate'];?>
            </div>

            <div class="form__part">
                <input class="form__input" placeholder = " " type="text" id="cvvcode" name="cvvcode" value="<?php echo $_POST['cvvcode']?>"><br>
                <label class="form__label" for="cvvcode">CVC/CVV Code:</label><br><br>
                <?php echo $errors['cvvcode'];?>
            </div>

            <div class="form__part">
                <select class="form__select" id="gender" name="gender" value="<?php echo $_POST['gender']?>">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>
                <label class="form__label" for="gender">Choose a gender:</label><br><br>
                <?php echo $errors['gender'];?>
            </div>

            <div class="form__part">
                <input class="form__button" type="submit" value="Submit">
            </div>

        </fieldset>
    </form>
    <script src = "script.js"></script>
</body>

</html>
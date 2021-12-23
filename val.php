<?php
function format_data($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}
 
global $fname;
$fname = format_data($_POST['fname']);
$lname = format_data($_POST['lname']);
$cnumber = format_data($_POST['cnumber']);
$cdate = format_data($_POST['cdate']);
$cvvcode = format_data($_POST['cvvcode']);
$gender = format_data($_POST['gender']);
 
$pattern_card = '/^(?<!\d)\d{16}(?!\d)|(?<!\d[ _-])(?<!\d)\d{4}(?:[_ -]\d{4}) {3}(?![_ -]?\d)$/';
 
$pattern_name = '/^[А-ЯЁ][а-яё]*$/';

$errors = [];
$flag = 0;
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (preg_match($pattern_name, $fname)) {
        $errors['fname'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if (preg_match($pattern_name, $lname)) {
        $errors['lname'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if (mb_strlen($fname) > 20 || empty($fname)) {
        $errors['fname'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if (mb_strlen($lname) > 20 || empty($lname)) {
        $errors['lname'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if (!filter_var($cvvcode, FILTER_VALIDATE_INT) || strlen($cvvcode) > 3) {
        $errors['cvvcode'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if (empty($cvvcode)) {
        $errors['cvvcode'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1; 
    }
    if (!preg_match($pattern_card, $cnumber)) {
        $errors['cnumber'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if (empty($cnumber)) {
        $errors['cnumber'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if (empty($cdate)) {
        $errors['cdate'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if (empty($gender)) {
        $errors['gender'] = '<small class="text__error">Неправильно! Попробуй еще раз.</small>';
        $flag = 1;
    }
    if ($flag == 0) {
        //Header("Location:". 'http://Form/Thanks.php');
        Header('Refresh:0; url=Thanks.php');
    }
}
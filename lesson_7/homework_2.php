<?php

$name = $_POST['name'];
$regex = '/^[\S\w]{2,20}\.(png|jpeg|jpg|pdf)$/';
$isValidNameField = preg_match($regex, $name);
$isValidFileField = preg_match($regex, $_FILES['file']['name']);

if ($isValidFileField && $isValidNameField) {
    $filename = __DIR__ . 'homework_2.php/' . $name;
    move_uploaded_file($_FILES['file']['tmp_name'], $filename);
} else {
    print_r('Error');
}



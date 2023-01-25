<?php

$allowedFormats = ['svg', 'jpeg', 'jpg', 'svg', 'sql'];

$file = $_FILES['file'];
$name = $file['name'];

if (isValidFile($allowedFormats, $name)) {
    $uploadFile = __DIR__ . '/' . basename($name);
    move_uploaded_file($file['tmp_name'], $uploadFile);
} else {
    print_r('Is not valid format');
}

function isValidFile(array $allowedFormats, string $fileName): bool
{
    $explodeString = explode('.', $fileName);
    $format = $explodeString[1];

    if (in_array($format, $allowedFormats)) {
        return true;
    }

    return false;
}

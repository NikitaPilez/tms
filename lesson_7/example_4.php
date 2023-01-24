<?php

if ($_FILES) {
    foreach($_FILES['files']['name'] as $key => $file) {
        $uploadFile = __DIR__ . '/' . basename($_FILES['files']['name'][$key]);
        move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadFile);
    }
}



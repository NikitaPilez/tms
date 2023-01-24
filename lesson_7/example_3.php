<?php

if ($_FILES) {
    $uploadFile = __DIR__ . '/' . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
}


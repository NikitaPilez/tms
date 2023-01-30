<?php
session_start();
print_r($_SESSION['lang']);
session_destroy();

<?php

session_start();

$csrf_token = $_SESSION['csrf_token'] ?? false;

if( !$csrf_token or $csrf_token !== filter_input(INPUT_POST,'_csrf_token')){
    die('CSRF Validation token Fail !');
}

include __DIR__.'/libs/get_data.php';
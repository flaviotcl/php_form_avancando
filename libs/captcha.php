<?php
session_start();

$captcha = $_SESSION['captcha'] ?? false;

var_dump('  -->   ',$captcha);
var_dump('   - - -- - - - - ->      ',filter_input(INPUT_POST,'_captcha'));


if( !$captcha or $captcha !== filter_input(INPUT_POST,'_captcha')){
    die('CAPTCHA Validation token Fail !');
}
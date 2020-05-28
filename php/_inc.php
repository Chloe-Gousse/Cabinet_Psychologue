<?php
session_start();

function dd($var){
    var_dump($var);
    die();
}

require '../php/class/Form.php';
require '../php/class/Validator.php';

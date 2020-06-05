<?php
require 'php/_inc.php';
$errors = [];
$emails = ['goussechloe@gmail.com', 'goussechloe@gmail.com', 'goussechloe@gmail.com'];

$validator = new Validator($_POST);
$validator->check('name', 'required');
$validator->check('email', 'required');
$validator->check('email', 'email');
$validator->check('subject', 'required');
$validator->check('message', 'required');
$validator->check('service', 'in', array_keys($emails));
$errors = $validator->errors();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php');
} else {
    $_SESSION['success'] = 1;
    $headers = 'FROM: ' . $_POST['email'];
    mail($emails[$_POST['service']], 'Formulaire de contact de ' . $_POST['name'], $_POST['message'], $headers);
    header('Location: index.php');
}
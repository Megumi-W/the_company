<?php
include '../Classes/User.php';

//create an object
$user = new User;

$user->store($_POST);


?>
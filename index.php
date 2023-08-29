<?php

$hardcoded_username = "sliit_ead";
$hardcoded_password = md5("123456");

// Is this a POST request?
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['Username'] == $hardcoded_username && $_POST['Password'] == $hardcoded_password){
        echo json_encode(array(
            'success' => true,
            'message' => 'Login successful!'
        ));
        exit();
    }
    else{
        echo json_encode(array(
            'success' => false,
            'message' => 'Username or Password is wrong'
        ));
        exit();
    }
}

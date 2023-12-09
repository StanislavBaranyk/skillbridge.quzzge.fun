<?php


$dataSignUpForm = [
    'userName' => '',
    'userEmail' => '',
    'userPassword' => '',
    'responseStatus' => true,
];

function checkUserData() {

    if (strlen($_POST['name']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['password']) == 0) {


    } else if (strlen($_POST['name']) > 0 || strlen($_POST['email']) > 0 || strlen($_POST['password']) > 0) {

        $dataSignUpForm['userName'] = $_POST['name'];
        $dataSignUpForm['userEmail'] = $_POST['email'];
        $dataSignUpForm['userPassword'] = $_POST['password'];
        $dataSignUpForm['responseStatus'] = true;

        echo json_encode($dataSignUpForm);
    }
}

checkUserData();
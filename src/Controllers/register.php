<?php
require_once '../Controllers/RegisterController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $registerController = new RegisterController();

    $response = $registerController->register([
        'nom' => $_POST['Last_name'],
        'prenom' => $_POST['First_name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'role_id' => $_POST['role_id'],
        'skills' => $_POST['skills'] ?? null,
        'nom_entreprise' => $_POST['company_name'] ?? null
    ]);

    if ($response['success']) {
        header('Location: login.php');
        exit();
    } else {
        echo $response['message'];
    }
}

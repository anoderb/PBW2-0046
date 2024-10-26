<?php

require_once 'config/database.php';
require_once 'app/controllers/UserController.php';

// Koneksi ke database
$dbConnection = getDBConnection();

// Membuat objek UserController
$controller = new UserController($dbConnection);
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action === 'detail') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 1;
    $controller->show($id);
} elseif ($action === 'edit') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 1;
    $controller->edit($id);
} elseif ($action === 'update') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 1;
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email']
    ];
    $controller->update($id, $data);
} else {
    $controller->index();
}
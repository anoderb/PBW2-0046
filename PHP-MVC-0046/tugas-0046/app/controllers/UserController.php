<?php
require_once 'app/models/User.php';

class UserController 
{
    private $userModel;

    public function __construct($dbConnection)
    {
        $this->userModel = new User($dbConnection);
    }

    public function index()
    {
        // Mengambil semua data pengguna dari model
        $users = $this->userModel->getAllUsers();

        // Memuat view dan meneruskan data pengguna
        require_once 'app/view/userListView.php';
    }

    public function show($id)
    {
        // Mengambil data pengguna berdasarkan ID dari model
        $user = $this->userModel->getUserById($id);

        // Memuat view dan meneruskan data pengguna
        require_once 'app/view/userView.php';
    }
    public function edit($id)
    {
        // Retrieve user data by ID
        $user = $this->userModel->getUserById($id);

        // Load the edit form view and pass the user data
        require_once 'app/view/userEditView.php';
    }

    public function update($id, $data)
    {
        // Update user data in the database
        $this->userModel->updateUser($id, $data);

        // Redirect to the user list
        header("Location: index.php");
    }

}

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

        $users = $this->userModel->getAllUsers();


        require_once 'app/view/userListView.php';
    }

    public function show($id)
    {

        $user = $this->userModel->getUserById($id);


        require_once 'app/view/userView.php';
    }
    public function edit($id)
    {

        $user = $this->userModel->getUserById($id);


        require_once 'app/view/userEditView.php';
    }

    public function update($id, $data)
    {

        $this->userModel->updateUser($id, $data);


        header("Location: index.php");
    }

}

<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('register');
        echo view('common/footer');
    }

    public function do_register()
    {
        $userModel = new UserModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = (String)$this->request->getPost('password');

        echo "Formdan alinan: ".$password;

        $password = password_hash($password, PASSWORD_BCRYPT);

        echo "<br> Hash lenen: ".$password;

        $data = [
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        ];

        // echo (String)$data;

        $r = $userModel->insert($data);

        echo "<br> r:".$r."<br>";
        
        if ( $r ) {
            echo "User Registered Successfully.";
        }else{
            echo "Error during registration!";
        }

    }

}


<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('login');
        echo view('common/footer');
    }

    public function do_login()
    {   
        $userModel = new UserModel();
        
        $email = $this->request->getPost('email');
        $password = (String)$this->request->getPost('password'); 

        // echo $password;
        
        $result = $userModel->where('email', $email)->first(); 

        // print_r($result);
        // echo $result;

        if ( $result->id > 0 ) {
            if (password_verify($password, $result->password)) {

                $this->session->set("user", $result);       
                
                return redirect()->to('/dashboard');                          
            
            } else {
                echo 'Invalid email or password';
            }
        } else {
            echo 'Invalid email or password';
        }
    
    }

    public function logout(){
        session_destroy();
    }

}

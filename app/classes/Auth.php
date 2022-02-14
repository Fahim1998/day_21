<?php

namespace App\classes;
use App\classes\Home;
use App\classes\User;

class Auth
{
    protected $password;
    protected $email;
    protected $user;
    protected $users;
    protected $home;


    public function __construct($post=null)
    {
        $this->email=$post['email'];
        $this->password= $post['password'];
    }
    public function login()
    {
        header('Location: action.php? pages=login');
    }
    public function verify ()
    {
        $this->user=new User();
        $this->users = $this->user->getAllUser();
        foreach ($this->users as $data)
        {
            if ($data['email']==$this->email && $data['password']==$this->password)
            {
                session_start();
                $_SESSION['id']=$data['id'];
                $_SESSION['name']=$data['name'];
                $this->home=new Home();
                $this->home->index();
            }

        }
    return"sorry emial or id is invalid";
    }

    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        $this->login();

    }

}
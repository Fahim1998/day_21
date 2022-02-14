<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Auth;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
        if (isset($_SESSION['id']))
        {
            include 'pages/home.php';
        }
    else
        {
            $auth=new Auth();
            $auth->login();
        }


    elseif ($_GET['pages']=='login')
        if (isset($_SESSION['id']))
        {
           include 'pages/home.php';

        }
        else
        {
            include 'pages/login.php';
        }


    elseif (isset($_GET['logout']))
    {
        $auth= new Auth();
        $auth->logout();
    }
    elseif ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products= $product->getAllProduct();
        include 'pages/product.php';
    }

}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth($_POST);
    $message= $auth->verify();
    include 'pages/login.php';

}


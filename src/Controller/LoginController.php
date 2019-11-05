<?php


namespace App\Controller;

class LoginController extends AbstractController
{


    /**
     * Display item listing
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {


        return $this->twig->render('Login/index.html.twig');

    }

    public function checkLogin () {
        $user = "admin";
        $pwd ="password";

        if ($_POST['username'] === $user && $_POST['password']=== $pwd){
            $_SESSION['user']=$_POST['username'];
            if ($_POST['check'] == 'on') {
                setcookie('login', $_SESSION['user'], 3600 * 24 * 30);
            }
            header('Location:/admin/index');
        } else {
            header('Location:/login/index');
        }

    }
}
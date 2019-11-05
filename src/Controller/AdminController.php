<?php


namespace App\Controller;

class AdminController extends AbstractController
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
        if (empty($_SESSION['user'])){
           return header('Location:/Login/index');
        }
        return $this->twig->render('Admin/index.html.twig' );
    }
}

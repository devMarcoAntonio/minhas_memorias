<?php

class LoginController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload' => true,
        ]);
        $template = $twig->load('login.html');

        return $template->render();
    }
    public function check()
    {
        try{

            $user = new User;
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validateLogin($_POST['name']);

        }
            catch (\Exception $e)
        {
            header('Location:http://localhost/proj/');
        }
    }
}
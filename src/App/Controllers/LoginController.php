<?php
namespace App\Controllers;

use App\Services\Authenticator;
use App\Controllers\AbstractController;

class LoginController extends AbstractController
{
    public function index() {
        $errors = [];
        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $password = htmlentities(strip_tags($_POST['password']));
            $email = htmlentities(strip_tags($_POST['email']));
            $auth = new Authenticator();
            if($auth->login($email,$password)){
            // Si l'utilisateur a coché la case remember me
            // On lui crée un cookie
            if(isset($_POST['remember_me'])){
                $cookieData = serialize($_SESSION['user']); // unserialize($cookieData); pour récupérer le tableau
                setcookie(CONFIG_COOKIE_NAME, $cookieData, time()+3600);
            }
            header('Location:?page=admin');
        }
            else{
            $errors[] = "Problème d'authentification";
        }       
        }
        $template = './views/template_login.phtml';
        $this->render($template,['errors'=>$errors]);
    }
}
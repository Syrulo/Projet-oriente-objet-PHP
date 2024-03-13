<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\PostManager;

class HomeController extends AbstractController
{
    public function index() {
        $title = "Hello OOP World";
        $dbpost = new PostManager();
        $posts = $dbpost->getAll(3);
        $template = './views/template_home.phtml';
        $this->render($template,['title'=>$title, 'posts'=>$posts]);
    }

    public function new(){
        $title = "Hello OOP World => La méthode c'est NEW HOHOHO";
        $template = './views/template_home_new.phtml';
        $dbpost = new PostManager();
        $posts = $dbpost->getAll(3);
        $this->render($template,['title'=>$title, 'posts'=>$posts]);
    }
}
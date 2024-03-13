<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Services\Authenticator;
use App\Models\PostManager;

class AdminController extends AbstractController{

    public function __construct(){
        if(!Authenticator::isRole("ROLE_ADMIN")){
            header("Location:?page=home");
            die();
        }
    }

    public function index() {
        $dbPost = new PostManager();
        $posts= $dbPost->getAll();
        $template = './views/template_admin.phtml';
        $this->render($template,[
            'title'=>'Welcome to the Admin Dashboard',
            'posts'=>$posts
        ]);
    }
}


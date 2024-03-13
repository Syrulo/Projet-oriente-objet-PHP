<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\PostManager;
use App\Models\UserManager;

class GalleryController extends AbstractController
{
    public function index() {
        $title = "Hello this is the GalleryController";
        $dbPost = new PostManager();
        $posts= $dbPost->getAll(null, "SELECT *,post.created_at as datepost,post.id as post_id FROM post LEFT JOIN contact on post.user_id = contact.user_id ORDER BY post.id DESC");
        $dbUser = new UserManager();
        $users = $dbUser->getAll();
        $user_25 = $dbUser->getOneById(25);
        $template = './views/template_gallery.phtml';
        $this->render($template,[
        'title'=>$title,
        'posts'=>$posts,
        'users'=>$users,
        'user_25'=>$user_25
    ]);
    }
}
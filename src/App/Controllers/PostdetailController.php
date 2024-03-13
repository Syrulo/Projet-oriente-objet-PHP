<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\PostManager;
use App\Models\CommentaireManager;
use App\Services\Utils;

class PostdetailController extends AbstractController
{

    
    public function index(){
        $post_id = (int)$_GET['id'];
        $manager = new PostManager();
        $sql = "SELECT post.*,contact.firstname,contact.lastname FROM post,contact WHERE post.id=? AND post.user_id=contact.user_id LIMIT 1";
        $post = $manager->getOne($sql,[$post_id]);
        $sql = "SELECT commentaire.*,contact.firstname,contact.lastname FROM commentaire,contact WHERE commentaire.post_id='".$post_id."' AND commentaire.user_id=contact.user_id ORDER BY id DESC";
        $comment = new CommentaireManager();
        $comments = $comment->getAll(null,$sql);
        $template = './views/template_postdetail.phtml';
        $this->render($template, ["article"=>$post, "post_id"=>$post_id, "comments"=>$comments]);
    }
    
    public function add_comment(){
        $post_id = (int)$_GET['id'];
        $created_at = date('Y-m-d H:i:s');
        $user_id = $_SESSION['user']['id'];
        if(isset($_POST['commentaire']) && !empty($_POST['commentaire']));
            $c_manager = new CommentaireManager();
            $commentaire = Utils::inputCleaner($_POST['commentaire']);
            $insert = $c_manager->insert([$user_id, $post_id, $commentaire, $created_at]);
            header("Location:?page=postdetail&id=$post_id");
    }
}
<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\UserManager;

class ProfilController extends AbstractController {

public function index() {
   $id = (int)$_GET['id'];
   $member = false;
   if(isset($_SESSION['user']) && in_array("ROLE_MEMBER",json_decode($_SESSION['user']['roles']))) {
      $member = true;
      }      
   $user = new UserManager();
   $sql = $user->getOne("SELECT user.id, user.email, contact.firstname, contact.lastname, contact.address1, contact.address2, contact.city, contact.state, contact.zip FROM user,contact WHERE user.id= $id and contact.user_id= $id");
   
   $template = './views/template_profil.phtml';
   $this->render($template,
   [
   'sql'=>$sql,

]);
   }
}
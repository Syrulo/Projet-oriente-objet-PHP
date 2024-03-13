<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\UserManager;

class ProfilupdateController extends AbstractController {

public function index() {
if ( !isset($_SESSION['user']) || !in_array("ROLE_MEMBER",json_decode($_SESSION['user']['roles'])) ){
    header("Location:?page=home");
    exit();
}
$errors = [];
$the_profil = (int)$_GET['id'];
$user = new UserManager();
$the_profil = $user->getOne("SELECT *,user.id as id FROM user, contact WHERE user.id=$the_profil and contact.user_id=$the_profil");
if (isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
    $email = htmlentities(strip_tags($_POST['email']));
    $firstname = htmlentities(strip_tags($_POST['firstname']));
    $lastname = htmlentities(strip_tags($_POST['lastname']));
    $address1 = htmlentities(strip_tags($_POST['address1']));
    $address2 = htmlentities(strip_tags($_POST['address2']));
    $city = htmlentities(strip_tags($_POST['city']));
    $state = htmlentities(strip_tags($_POST['state']));
    $zip = htmlentities(strip_tags($_POST['zip']));
    $id = $_GET['id'];
    $user->updateQuery("UPDATE user SET email = ? WHERE id = ?", [$email, $id]);
    $user->updateQuery("UPDATE contact SET firstname = ?, lastname = ?, address1 = ?, address2 = ?, city = ?, state = ?, zip = ? WHERE contact.user_id = ?", [$firstname, $lastname, $address1, $address2, $city, $state, $zip, $id]);
    header("Location:?page=profil&id=$id");
    }
    $state = [
        "Auvergne-Rhone-Alpes",
        "Bourgogne-Franche-Comte",
        "Bretagne",
        "Centre-Val de Loire",
        "Corse",
        "Grand Est",
        "Hauts-de-France",
        "Ile-de-France",
        "Normandie",
        "Nouvelle-Aquitaine",
        "Occitanie",
        "Pays de la Loire",
        "Provence Alpes Cote d'Azur",
        "Guadeloupe",
        "Guyane",
        "Martinique",
        "Mayotte",
        "Reunion"
    ];
    $template = './views/template_profil_update.phtml';
    $this->render($template,
    [
    'the_profil'=> $the_profil,    
    'state'=> $state,
    'errors' => $errors
    ]);
    }
}

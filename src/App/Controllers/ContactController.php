<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\UserManager;
use App\Models\ContactManager;
use App\Services\Authenticator;
use App\Services\Utils;

class ContactController extends AbstractController
{
    public function index() {
        $isFinished = false;
        $errors=[];
        $email = "";
if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $email = htmlentities(strip_tags($_POST['email']));
    $password = htmlentities(strip_tags($_POST['password']));
    // Le mot-de-passe doit être hashé 
    $password = password_hash($password,PASSWORD_DEFAULT);
    // On déclare les champs qui vont être utilisés
    // Afin de les traiter en amont de l'insertion
    $firstname = htmlentities(strip_tags($_POST['firstname']));
    $lastname = htmlentities(strip_tags($_POST['lastname']));
    $address1 = htmlentities(strip_tags($_POST['address1']));
    $address2 = htmlentities(strip_tags($_POST['address2']));
    $city = htmlentities(strip_tags($_POST['city']));
    $state = htmlentities(strip_tags($_POST['state']));
    $zip = htmlentities(strip_tags($_POST['zip']));
    $message = htmlentities(strip_tags($_POST['message']));
    // Au départ on suppose qu'il n'y a pas d'erreur
    // Le tableau des erreurs est donc vide
    // Au départ l'email n'est, à priori, pas dans la BDD
    $exists = false;
    // Si l'email n'est pas valide => error
   // var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    //die();
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Veuillez renseigner une adresse email valide svp.";
    }
    // On doit ensuite vérifier si l'email est déjà dans la BDD
    // On se connecte à la BDD
    $user= new UserManager();
    $user->getUserByEmail($email);
    // Si l'email existe déjà dans la BDD => error !
    if ($exists) {
        $errors[] = "Cet utilisateur existe déjà dans la base de données.";
    }
    // S'il n'y a pas d'erreur
    // On effectue l'insertion de l'utilisateur dans la BDD
    if (empty($errors)){
    
    $user= new UserManager(); 
    $u = $user->insert([$email, $password]);  

        $user_id = $u->lastInsertId();
      // Utils::dump_die($user_id);
        // On prépare la requête d'insertion pour la table de contact
        $contact = new ContactManager();
        $contact->insert([$user_id, $firstname, $lastname, $address1, $address2, $city, $state, $zip, $message]);

        /// ON EST BON LA
        $isFinished = true;
    }    
}

$state = [
    "Auvergne-Rhône-Alpes",
    "Bourgogne-Franche-Comté",
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
    "Provence Alpes Côte d’Azur",
    "Guadeloupe",
    "Guyane",
    "Martinique",
    "Mayotte",
    "Réunion"
];
        
        $title = "Page de Contact";
        $template = './views/template_contact.phtml';
        $this->render($template, ["title"=>$title, "isFinished"=>$isFinished, "errors"=>$errors, "email"=>$email, "state"=>$state]);
    }
}
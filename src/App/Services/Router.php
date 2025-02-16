<?php
namespace App\Services;
/** 
 * A very simple class Router
 * based on $_GET['page']
 * $page=contact&action=new
 * page => Controller, action => method
*/
class Router
{
    private $page;
    private $action;

    public function __construct(){
        $this->setPage();
        $this->setAction();
    }

    public function setPage(){
        $this->page = isset($_GET['page']) ? strtolower($_GET['page']) : "home";
    }

    public function getPage(){
        return $this->page;
    }

    public function setAction(){
        $this->action = isset($_GET['action']) ? strtolower($_GET['action']) : "index";
    }

    public function getAction(){
        return $this->action;
    }

    public  function run(){
        // on définit le controleur par défaut
        // Et la méthode par défaut
        $controllerName = "App\Controllers\\NotFoundController";
        $action = "index";

    // Ajouter le cas pour le contrôleur AdminUserController
    if ($this->getPage() == 'admin_profil_list') {
        $controllerName = "App\Controllers\Admin\AdminUserController";
        $action = "listUsers";
    }

    // Vérifier si l'action est "delete" pour supprimer un utilisateur
    if ($this->getPage() == 'admin_profil_list' && $this->getAction() == 'delete') {
        // Si c'est le cas, on supprime l'utilisateur
        $controllerName = "App\Controllers\Admin\AdminUserController";
        $action = "deleteUser"; // Méthode pour supprimer un utilisateur
    }

    // Vérifier si la page existe dans le sous-répertoire Admin
    $controllerPath = "./src/App/Controllers/Admin/" . ucfirst($this->getPage()) . "Controller.php";
    if (file_exists($controllerPath)) {
    // Mise à jour du chemin du contrôleur pour qu'il prenne en compte le sous-répertoire Admin
    $controllerName = "App\Controllers\Admin\\" . ucfirst($this->getPage()) . "Controller";
    }

    // Si le fichier       
    // exemple: App\Controllers\HomeController.php existe 
    // alors on instancie la class
    if(file_exists("./src/App/Controllers/".ucfirst($this->getPage())."Controller.php")){
        $controllerName = "App\Controllers\\".ucfirst($this->getPage())."Controller";
    }

 // Si la méthode correspondante dans le controller existe 
 // alors on execute cette méthode   
    if(method_exists($controllerName,$this->getAction())){
        $action = $this->getAction();
    }
    
 // On peut donc ensuite instancier notre controller   
    $controller = new $controllerName(); // ex : $controller = new HomeController()
 // On peut ensuite exécuter la méthode correspondante 
 // Par défaut c'est inde()      
    $controller->$action(); 
    }
}
<?php

namespace App\Controllers\Admin;

use App\Models\UserManager;
use App\Controllers\AbstractController;

class AdminUserController extends AbstractController
{
    public function listUsers()
    {
        // Instancier le modèle UserManager
        $userManager = new UserManager();

        // Récupérer tous les utilisateurs
        $users = $userManager->getAllUsers();

        // Passer les utilisateurs à la vue
        $this->render('./views/admin/template_admin_profil_list.phtml', ['users' => $users]);
    }

    public function deleteUser() 
    {
        if (isset($_GET['id'])) {
            $userId = (int) $_GET['id'];
            echo "Suppression de l'utilisateur avec l'ID : " . $userId;  // Débogage
    
            $userManager = new UserManager();
            $userManager->deleteUserById($userId); // Appelle la méthode de suppression
    
            header('Location: ?page=admin_profil_list');
            exit;
        } else {
            header('Location: ?page=admin_profil_list');
            exit;
        }
    }
    
}

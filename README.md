# Gallery Project

## Description

Ce projet est une galerie d'images réalisée en PHP, utilisant la programmation orientée objet (POO). Il permet aux utilisateurs de consulter des images et d'en rajouter. 

## Fonctionnalités

- **Page d'accueil** : Affiche une galerie d'images avec un carrousel dynamique.
- **Section administration** : Permet à l'administrateur d'ajouter, modifier ou supprimer des images ou des utilisateurs.
- **Contrôles d'accès** : L'accès à la partie administration est protégé par un système de rôle (seul un utilisateur avec le rôle "ROLE_ADMIN" peut y accéder).

## Structure du projet

### Utilisation du modèle MVC (Modèle-Vue-Contrôleur) :
- **/src** : Contient tout le code source de l'application.
  - **/App/Controllers** : Contient les contrôleurs qui gèrent la logique des pages.
  - **/App/Models** : Contient les modèles qui gèrent la logique métier.
  - **/App/Views** : Contient les vues de l'application.
  - **/App/Services** : Contient les services comme le `Router.php` qui gère les routes.
  
## Technologies utilisées

- **PHP 8+** : Langage de programmation utilisé pour construire l'application.
- **MySQL** : Système de gestion de base de données pour stocker les images, les utilisateurs, etc.
- **Bootstrap** : Framework CSS pour la mise en page responsive et la création d'un carrousel dynamique.



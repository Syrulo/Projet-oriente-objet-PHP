## Gallery Project (PHP / POO)

Petit projet personnel et première expérience de développement orienté objet en PHP. Il est largement perfectible, certaines fonctionnalités ou bonnes pratiques restant à améliorer, mais m’a permis de comprendre les bases de la POO, du MVC et de la gestion des rôles utilisateur.

## Description

Galerie permettant aux utilisateurs de parcourir des visuels et à l’administrateur de gérer le contenu.

## Fonctionnalités

- **Page d’accueil :** galerie d’images avec carrousel dynamique
- Section administration :** ajout, modification et suppression d’images ou d’utilisateurs
- **Contrôle d’accès :** système de rôle (seul un utilisateur avec le rôle "ROLE_ADMIN" peut accéder à l’administration)

## Structure du projet

- Utilisation du modèle MVC (Modèle-Vue-Contrôleur)

  - **/src/App/Controllers :** contrôleurs
  - **/src/App/Models :** modèles
  - **/src/App/Views :** vues
  - **/src/App/Services :** services comme le Router
  
## Technologies utilisées

- **PHP 8+**
- **MySQL** pour la gestion des données
- **Bootstrap** pour le design responsive et le carrousel


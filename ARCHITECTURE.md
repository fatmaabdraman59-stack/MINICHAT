# Architecture du Projet Mini-Chat

## Vue d'ensemble
Ce projet est une application de chat en temps réel construite avec une architecture MVC (Model-View-Controller) utilisant PHP, MySQL, et Docker.

## Structure du Projet

```
mini-chat/
├── assets/                 # Ressources statiques
│   └── chat.png           # Image du chat
├── controller/            # Couche Contrôleur
│   └── controller.php     # Gestion de la logique métier
├── db-init/              # Scripts d'initialisation de la base de données
│   └── init.sql          # Script SQL initial
├── model/                # Couche Modèle
│   └── model.php         # Gestion des données et interactions avec la BD
├── resource/             # Ressources de base de données
│   └── minichat.sql      # Structure de la base de données
├── src/                  # Sources frontend
│   ├── js/              # JavaScript
│   │   ├── main.js      # Point d'entrée JavaScript
│   │   └── utils.js     # Fonctions utilitaires
│   └── sass/            # Styles SASS
│       ├── _base.scss   # Styles de base
│       ├── _placeholders.scss # Placeholders SASS
│       └── style.scss   # Point d'entrée des styles
├── view/                # Couche Vue
│   ├── view-feed.php    # Affichage des messages
│   ├── view-footer.php  # Pied de page
│   ├── view-head.php    # En-tête HTML
│   ├── view-index.php   # Page principale
│   └── view-utils.php   # Fonctions utilitaires pour les vues
├── compose.yml          # Configuration Docker Compose
├── Dockerfile           # Configuration de l'image Docker
├── index.php           # Point d'entrée de l'application
├── message-post.php    # Gestion des posts de messages
├── package.json        # Dépendances NPM
├── README.md          # Documentation principale
├── script.php         # Scripts utilitaires
└── webpack.config.js  # Configuration Webpack

```

## Architecture MVC

### 1. Modèle (Model)
- Situé dans `model/model.php`
- Responsable de :
  - La gestion des données
  - Les interactions avec la base de données
  - La validation des données

### 2. Vue (View)
- Située dans le dossier `view/`
- Composants :
  - `view-index.php` : Template principal
  - `view-feed.php` : Affichage des messages
  - `view-head.php` : En-tête HTML commun
  - `view-footer.php` : Pied de page commun
  - `view-utils.php` : Fonctions utilitaires pour l'affichage

### 3. Contrôleur (Controller)
- Situé dans `controller/controller.php`
- Gère :
  - La logique métier
  - Le routage des requêtes
  - La coordination entre le Modèle et la Vue

## Configuration Docker

L'application utilise une architecture en conteneurs avec trois services :

1. **Application (app)**
   - Serveur PHP Apache
   - Port : 8001
   - Dépend du service de base de données

2. **Base de données (db)**
   - MariaDB 10.11
   - Données persistantes via volume Docker
   - Scripts d'initialisation dans `db-init/`

3. **PHPMyAdmin**
   - Interface d'administration de la base de données
   - Port : 8002
   - Dépend du service de base de données

## Frontend

### JavaScript
- Organisation dans `src/js/`
- Utilisation de Webpack pour la compilation
- Fichiers principaux :
  - `main.js` : Point d'entrée
  - `utils.js` : Fonctions utilitaires

### Styles
- Utilisation de SASS pour les styles
- Organisation dans `src/sass/`
- Fichiers :
  - `style.scss` : Point d'entrée des styles
  - `_base.scss` : Styles de base
  - `_placeholders.scss` : Placeholders SASS

## Base de données

- Structure définie dans `resource/minichat.sql`
- Scripts d'initialisation dans `db-init/init.sql`
- Gestion via MariaDB
- Interface d'administration via PHPMyAdmin
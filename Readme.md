# 🧱 MiniFramework — PHP MVC Moderne & Léger

**MiniFramework** est un micro-framework PHP moderne basé sur l’architecture MVC, prêt pour démarrer rapidement des projets structurés. Il inclut un routeur, des middlewares, des entités abstraites, un ORM léger, un validateur, la gestion des sessions, un système de traduction et des outils de base de données (migrations/seeders).

---

## 📦 Installation

Via Composer :

```bash
composer require khalilouh/miniframework

 Structure du projet
.
├── app/                      # Coeur de l’application
│   ├── config/               # Fichiers de configuration (env, dépendances, middlewares)
│   ├── core/                 # Composants du framework
│   │   ├── abstract/         # Classes de base : Controller, Entity, Repository
│   │   ├── App.php           # Classe principale d’exécution
│   │   ├── Database.php      # Connexion PDO
│   │   ├── Router.php        # Routeur minimaliste
│   │   ├── Session.php       # Gestion de session
│   │   ├── Validator.php     # Système de validation
│   │   └── middlewares/      # Middlewares personnalisés
│   └── translate/            # Traductions multilingues
│       └── fr/error_fr.php
├── bin/                      # Commandes CLI (migrations/seeders)
│   ├── migrate
│   └── seed
├── database/                 # Fichiers SQL (création, insertion)
│   ├── create_mysql.sql
│   ├── insert_mysql.sql
│   ├── create_postgres.sql
│   └── insert_postgres.sql
├── migrations/               # Fichiers de migration PHP
│   └── Migration.php
├── seeders/                  # Fichiers de seeding PHP
│   └── Seeder.php
├── public/                   # Point d’entrée (front controller)
│   └── index.php
├── template/                 # Vues HTML (ex: dashboard, sécurité)
│   ├── dashboard/
│   └── security/
├── src/                      # Ton code métier (ex: Controllers, Entities)
├── composer.json
└── README.md


🚀 Exemple d’utilisation
🎯 1. Point d’entrée

// public/index.php
require __DIR__ . '/../vendor/autoload.php';

use khalilouh\miniframework\core\App;

$app = new App();
$app->run();


🛣 2. Déclaration de routes

use khalilouh\miniframework\core\Router;

Router::get('/login', [SecurityController::class, 'login']);
Router::post('/login', [SecurityController::class, 'authenticate']);

⚙️ Configuration
| Fichier            | Rôle                       |
| ------------------ | -------------------------- |
| `env.php`          | Variables d'environnement  |
| `middlewares.php`  | Définition des middlewares |
| `dependencies.php` | Injection de dépendances   |
| `service.yaml`     | Déclarations de services   |
| `helpers.php`      | Fonctions utilitaires      |


👤 Auteur

Nom : brahim1205

Email : sadiocheri11@gmail.com

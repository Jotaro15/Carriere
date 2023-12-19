# Projet de Site Web Minier

Bienvenue dans le projet de Site Web Minier, une application web construite avec le framework Laravel. Ce projet vise à fournir une plateforme permettant d'explorer des carrières minières, de créer des utilisateurs, et de visualiser différents sites miniers.

## Fonctionnalités
### Exploration des Carrières : 
Parcourez une liste de carrières minières avec des informations détaillées sur chaque site.

### Gestion des Utilisateurs : 
Créez des comptes utilisateurs pour accéder à des fonctionnalités personnalisées.

### Visualisation des Sites Miniers : 
Obtenez des informations spécifiques sur différents sites miniers, y compris leur emplacement, leurs caractéristiques, et plus encore.

## Prérequis
Assurez-vous d'avoir les éléments suivants installés sur votre machine avant de commencer :

*PHP* (version recommandée: 7.4 ou supérieure)
*Composer*
*Node.js* et *npm* (pour les dépendances JavaScript)

## Installation
• Clonez le Répertoire:

```git clone https://github.com/votre-utilisateur/site-web-minier.git```

• Accédez au Répertoire du Projet:

```cd site-web-minier```

• Installez les Dépendances PHP avec Composer:

```composer install```

• Copiez le Fichier d'Environnement:

```cp .env.example .env```

• Configurez la Base de Données:

Ouvrez le fichier .env et configurez les paramètres de la base de données (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).

```php artisan key:generate```

• Exécutez les Migrations et les Semences:

```php artisan migrate --seed```

• Installez les Dépendances JavaScript:

```npm install && npm run dev```

## Lancement de l'Application
Une fois l'installation terminée, lancez l'application en utilisant la commande Artisan :

```php artisan serve```

Par défaut, l'application sera accessible à l'adresse http://localhost:8000. Vous pouvez maintenant explorer les carrières minières, créer des utilisateurs et visualiser différents sites miniers.

N'oubliez pas de consulter la documentation de Laravel pour plus d'informations sur le déploiement en production, la configuration de serveur web, etc.

Merci de votre lecture ! 🚀
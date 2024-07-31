# Étapes pour Construire le Système de Gestion de Cours

1. **Configurer la base de données**
   - Modifier le fichier `config/database.php` pour configurer les paramètres de la base de données.

2. **Définir les modèles**
   - Créer les modèles dans le dossier `app/Models/` pour représenter les entités suivantes :
     - `Etudiant`
     - `Cours`
     - `Inscription`

3. **Créer les contrôleurs**
   - Développer les contrôleurs dans le dossier `app/Controllers/` pour gérer les opérations CRUD (Créer, Lire, Mettre à jour, Supprimer) et l'affichage des pages. Exemple :
     - `EtudiantController.php`
     - `CoursController.php`
     - `InscriptionController.php`

4. **Définir les vues**
   - Créer les fichiers de vue dans le dossier `app/views/` pour afficher les données. Exemple :
     - `etudiant.blade.php`
     - `cours.blade.php`
     - `inscription.blade.php`


5. **Mettre en place un point d'entrée**
   - Assurer la configuration du point d'entrée dans le fichier `public/index.php`.



## Léçons :

1. Modèle (Model)
Le modèle représente la logique et les données de l'application. Il est responsable de la gestion de l'accès aux données et de leur manipulation. Le modèle est en charge des opérations suivantes :

- Représenter les données de l'application.
- Effectuer les opérations de CRUD (Créer, Lire, Mettre à jour, Supprimer) sur les données.
- Gérer les règles de validation et les règles métier.
- Interagir avec la base de données ou d'autres sources de données.



2. Contrôleur (Controller)
Le contrôleur est responsable de gérer la logique de l'application et de coordonner l'interaction entre le modèle et la vue. Il reçoit les requêtes de l'utilisateur, traite ces requêtes en utilisant les modèles et sélectionne les vues appropriées pour afficher les résultats. Le contrôleur effectue les tâches suivantes :

- Recevoir et traiter les requêtes HTTP.
- Utiliser les modèles pour obtenir ou modifier les données.
- Sélectionner et renvoyer les vues appropriées pour afficher les données.


3. Différences Clés

* Rôle :

Modèle : Gère la logique de données de l'application. Il interagit avec la base de données et contient les règles métier.
Contrôleur : Gère la logique d'application et coordonne les interactions entre le modèle et la vue. Il reçoit les requêtes utilisateur et détermine les réponses appropriées.

* Responsabilités :

Modèle : Représente les données et fournit des méthodes pour manipuler ces données.
Contrôleur : Traite les requêtes, utilise les modèles pour les opérations sur les données, et sélectionne les vues pour afficher les résultats.
Interaction :

Modèle : Peut être utilisé par plusieurs contrôleurs pour accéder aux données et appliquer les règles métier.
Contrôleur : Interagit avec le modèle pour obtenir ou mettre à jour les données, puis sélectionne la vue pour la présentation.

NB : les modèles s'occupent des données et des règles métier, tandis que les contrôleurs s'occupent des requêtes utilisateur et de la coordination entre les modèles et les vues.


4. Rélation POO et la Structure du code

La relation entre la Programmation Orientée Objet (POO) et la structure du code, notamment dans un modèle MVC (Modèle-Vue-Contrôleur), est fondamentale pour organiser le code de manière modulaire, réutilisable et maintenable. Voici comment les concepts de POO se rapportent à la structure du code et comment ils sont appliqués dans une architecture MVC.

## Model Etudiant :
ce quoi le mot clé parent? 

le mot-clé parent:: est utilisé pour appeler une méthode du parent de la classe courante. Plus précisément, parent::__construct() appelle le constructeur de la classe parente. 
Mini Projet : Gestion de Contacts

Présentation :

Ce mini-projet consiste à créer une application web permettant de gérer une liste de contacts.
L’utilisateur peut ajouter, modifier et supprimer des contacts.
Le projet inclut également un petit tableau de bord pour afficher des statistiques ainsi qu’une page de profil.

1.Fonctionnalités Laravel Utilisées :
-> CRUD complet
-> Routes resource
-> Contrôleur
-> Vues Blade
-> Validation des formulaires

2. Stack Utilisée : 

-> Laravel 9 
-> PHP 8.4
-> MySQL (Base de données)
-> Blade (Templates)
-> Javascript
-> CSS / Bootstrap 

3. Structure du Projet :

Dossiers principaux :

-> app/Models/Contact.php → Modèle du contact

-> app/Http/Controllers/ContactController.php ->  Logique CRUD

-> resources/views/contacts/ ->  Vues : (Dashboard, Contact, FormContact, UpdateContact, Profile)

-> resources/views/layout/app.blade.php ->  Layout principal

-> database/migrations/xxxx_create_contacts_table.php -> Structure de la table

4. Routes CRUD du Projet : 

->  Afficher list  contacts
Méthode : get / Route : /contact-list

->  Formulaire d’ajout contact
Méthode : get 
 Route : /contact-form

->  Ajouter un contact
Méthode : post 
 Route : /contact-add

->  Formulaire édition
Méthode : get 
 Route : /contact-edit/{id}

-> Mettre à jour contact
Méthode : post 
 Route : /contact-update

-> Supprimer contact
Méthode : post 
 Route : /contact-delete

5. Structure de la Base de Données : 

Champ	Type	Description
id	int	clé primaire
prenom	string	obligatoire
nom	string	obligatoire
email	string	unique
telephone string obligatoire	
poste	string	obligatoire
photo	string	optionnel
created_at	timestamp	auto
updated_at	timestamp	auto

6. Fonctionnalités Réalisées

->  Afficher la liste des contacts
->  Ajouter un contact
->  Modifier un contact
->  Supprimer un contact
->  Validation des formulaires
->  Recherche des contacts



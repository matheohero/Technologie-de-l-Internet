# Technologie-de-l-Internet

## 1 Description du projet

Ce site web est un site de collection de vidéos. Il permet de savoir quels jeux on possède et combien de temps on a passé sur chaque jeu.

## 2 Fonctionnalités 

### 2.1 La gestion des utilisateurs

- Création d'un utilisateur avec vérification des champs
- Authentification
- La déconnexion
- La modification du profil utilisateur
- La suppression d'un compte utilisateur

### 2.2 La gestion des jeux

- Ajout d'un jeu dans sa bibliothèque
- Vue de tous les jeux de sa bibliothèque
- La mise à jour du temps de jeu
- La recherche / création de jeux

### 2.3 Autres

- Persistance des données avec une BDD
- Hachage des mots de passe dans la BDD
- Une session 

## 3 Instructions pour exécuter le site en local

Pour cela nous allons utiliser xampp : 
Il faut d'abord allumer Apache puis MySQL.
Ensuite il faut mettre la racine du projet dans \xampp\htdocs\Technologie-de-l-Internet
Cela permet d'accéder au site via http://127.0.0.1/Technologie-de-l-Internet
PS : la BDD se créer automatiquement si elle n'est pas présente

## 4 Outils et technologies utilisés

Les outils basiques du web ont été utilisés : CSS / PHP.
Néanmoins le projet est construit sous le modèle MVC

## 5 Problème présents

- La mise à jour du profile nécéssite la déconexion
- Il manques la mise en évidence des champs incorrecte dans chaque formulaire
- Les identifiants de connexion à la BDD ne sont pas pas le .env


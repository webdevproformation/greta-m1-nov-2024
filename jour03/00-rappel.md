# signature électronique

https://app.sowesign.com/sign/normal/7098/cc3154b0-6391-4c16-b1ad-c27c56de42a5


# rappel 


## faire un logo

- site internet photopea (photoshop sur internet)

## git 

- OUTIL DE VERSIONNING 
- garder un trace de l'avancé de chaque fichier dans un projet 
- garder (à la l'espace prêt) l'évolution de chaque fichier dans un projet informatique
- outil IDEAL pour travailler à plusieurs sur un même projet 
- SUIVRE les versions 
- outil en ligne de commande :
    - lancer un terminal 
    - saisir des commandes (pour exécuter le logiciel)

## quelques commandes 

```sh
git -v
git --version
git init 
git add 
git commit 
```

## git --version

- permet d'avoir 2 informations : 
    - est ce qui git est disponible / installé dans votre ordinateur ?
    - si oui, quelle est sa version ? 

pour les étudiants utilisant les ordinateurs de l'école => vous êtes en distanciel et il faut REINSTALLER git sur votre ordinateur maison

Dans visual studio > terminal > new terminal

```sh
git --version
```

## si la réponse est négative 

- aller sur https://git-scm.com/ => télécharger le .exe
- fermer visual studio > redémarrer (pour que git soit détecter)


## git init 

- initialiser un projet pour que l'on puisse utiliser git 
- créer un dossier caché .git qui va stocker le versionning 

```
Initialized empty Git repository in C:/Users/harri/Desktop/projet-recette/.git/
```

## repository / repo 

- dépôt le code informatique du projet ET ses différentes versions

## ATTENTION 

- AVANT DE LANCER GIT => il faut D'ABORD CREER UN DOSSIER ET c'est ce dossier que l'on va versionner 
- il ne faut pas créer un fichier et lancer git 
- ATTENTION ne pas lancer git init dans le dossier Document ou dans le dossier c:\

- si vous avez créer le dossier .git dans Documents 
- il suffit de le supprimer  

## Attention 

- la commande git init ne doit être saisit QUE lors de la création du dossier qui va contenir le projet 
- si vous saisissez une autre fois la commande dans le dossier => reinitialiser le dossier repo 

## Attention

- la commande git init est exécuter DANS dossier 
- VOUS DEVEZ FAIRE ATTENTION OU la commande est saisie  
- pour Windows dossier>commande 
- Linux / Mac OS => pwd 


## rechercher tous les dossiers .git dans mon ordinateur (Linux / Mac)

```
find / -name .git -type d
```

# juste après la pause => travailler avec git 

```
git add 
git commit
```
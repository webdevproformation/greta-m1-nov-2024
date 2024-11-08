=> directement noté sur le tableau !!! 

# aujourd'hui !! branch 

## reprise pour les étudiants qui ont utilisé un autre ordinateur à la maison

1. créer un dossier "recette-projet"
2. Visual Studio Code => Fichier > Ouvrir le dossier > "recette-projet"
3. lancer un terminal 
    1. `git init` (à faire UNIQUEMENT lors du lancement du projet)
    1. `git config --global user.name "Your Name"` (une fois par machine)
    1. `git config --global user.email "youremail@yourdomain.com"`
4. créer deux fichiers dans le dossier "recette-projet"
    1. recette.html
    1. style.css
    2. remplir avec le html et le css mis sur le discord
5. POUR POUVOIR créer une branch il faut OBLIGATOIREMENT que tout le travail sur branch principale => main / master SOIT enregistré ET add et commit 

# je vais créer un monde parallèle et me positionne dessus 

```
git branch accueil => créer une nouvelle branch qui s'appelle accueil
git checkout accueil => je me positionne sur la branch accueil 
```

# travailler sur la branch

# fini

```
-- tout valider
git add 
git commit 

-- se positionner sur la branch principale
git checkout main 

-- fusionner le travail de la branch accueil SUR la branch principale
git merge accueil

-- supprimer la branch accueil 
git branch -d accueil
```
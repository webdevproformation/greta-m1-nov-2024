# travailler avec git 

je vais réaliser avec vous un projet html / css => recette de cuisine 

faire page qui contient 

- deux colonnes 
    - colonne 1
        - titre
        - image
        - 3 miniatures
    - colonne 2
        - description
        - prix 
        - duree 

=> je vais suivre la création de cette page au fur et à mesure de l'avancée

git add .

git config --global user.name "prenomNOM"
git config --global user.email "votre@email.com"

git commit -m "création des deux colonnes"

# synthese

- créer une dossier "projet recette" + git init 

- créer une page html et on l'a remplie 
    - créer des colonnes + git add + git commit V1
    - rempli la colonne 1 + git add + git commit V2
    - rempli la colonne 2 + git add + git commit V3
- créer le fichier style
    - reset + git add + git commit V4
    - mise en page (display flex) + git add + git commit V5
    - 
=> chaque étape de création / ajout de code => VERSION 
=> git permet de suivre l'évolution de notre travail ! 

=> actuellent le développeur => V5 
=> si tu veux voir les précédentes versions => .git 

# pour voir les différentes versions 

git init
git add 
git commit
gitk

# nouvelle commande plus en détail 

=> git add .
=> git status
=> git log 
=> git branch 
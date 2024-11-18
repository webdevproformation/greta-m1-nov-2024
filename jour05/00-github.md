# travail

- git add 
- git commit -m "message"

# je souhaite partager mon travail sur github 

- git push  
- pour pouvoir réaliser cette commande il faut au préalable avoir créer un dépôt sur le site github 
- cde dois faire un `git init` sur github 

# pouvez allez sur le site et créer votre profil 

- https://github.com/
- attention le site demande un email valide ET un téléphone (smartphone) valide
- garder précieusement vos identifiants / password 

# créer le dépot

- nom du projet
- description optionnelle
- visibilité => public / privée

# souhaites tu lier un dépôt local (dans ton ordinateur) avec le dépôt github que tu viens de créer 


echo "# recette-greta-nov-2024" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/webdevproformation/recette-greta-nov-2024.git
git push -u origin main

# synthèse

créer un dépôt sur github
liaison entre depôt local et le dépôt distant sur github
envoyer le projet recette de notre ordinateur vers le dépôt distant 

# pour info c'est 3 commandes doivent être réalisée QUE une seule fois 

git branch -M main
git remote add origin https://github.com/webdevproformation/recette-greta-nov-2024.git
git push -u origin main

git add .
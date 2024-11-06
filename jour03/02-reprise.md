# rappel

git init 
git add .
git commit -m ""
gitk 

# attention par défaut gitk n'est pas installé sur Mac / Linux 

Mac 

```sh
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
echo "export PATH=/opt/homebrew/bin:$PATH" >> ~/.bash_profile && source ~/.bash_profile

echo "export PATH=/opt/homebrew/bin:$PATH" >> ~/.zprofile && source ~/.zprofile
echo $PATH
/opt/homebrew/bin/brew install git
/opt/homebrew/bin/brew install git-gui
```

Linux 

```sh
sudo apt install gitk
```

# cas pratique : dans le projet recette

1. ajouter un titre au dessus du paragraphe h2 qui contient le texte "détail de la recette"
2. modifier le css pour que la durée et le prix soient l'un à côté de l'autre et non l'un en dessous de l'autre 
3. une fois que les modifications sont réalisées => 
    1. git add . 
    2. git commit -m "exo 1"
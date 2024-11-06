# liste de commande que l'on va voir ensemble 


```sh
git init
git add .
git commit -m "un texte"
git log
```

- attention les commandes ont un ordre 
- attention aux espaces 
- attention commandes Enter => aucun message (Bravo)
- attention commandes Enter => message (message d'erreur / précision ) pas de couleur 
- certaines commandes faire 1 seule fois `git init`
- certaines commandes saisir régulièrement `git add .` et `git commit`
- avant la commande vous avez le texte suivant : C:\Users\harri\Desktop\module1-outils
- vous allez réaliser une action dans le dossier "C:\Users\harri\Desktop\module1-outils"
- les commandes que l'on va saisir dans git, vous devez faire attention dans quel dossier la commande doit être exécutée 
- en fonction du dossier DANS LEQUEL je vais saisir mes commandes => les commandes ne vont pas fonctionner !!! 
- sur Linux / MacOS => `pwd`
- 


 
# git init

```txt
astuce: Utilisation de 'master' comme nom de la branche initiale. Le nom de la branche
astuce: par défaut peut changer. Pour configurer le nom de la branche initiale
astuce: pour tous les nouveaux dépôts, et supprimer cet avertissement, lancez :
astuce: 
astuce:         git config --global init.defaultBranch <nom>
astuce: 
astuce: Les noms les plus utilisés à la place de 'master' sont 'main', 'trunk' et
astuce: 'development'. La branche nouvellement créée peut être rénommée avec :
astuce: 
astuce:         git branch -m <nom>


Initialized empty Git repository in C:/Users/harri/Desktop/Nouveau dossier/.git/
```

- saisir 1 seule fois (pas besoin de la saisir une autre fois)
- créer un dossier .git ce dossier contenir les versions de votre projet 
- en général on ne va pas modifier le contenu de ce dossier 



git --init

unknown option: --init
usage: git [-v | --version] [-h | --help] [-C <path>] [-c <name>=<value>]
           [--exec-path[=<path>]] [--html-path] [--man-path] [--info-path]
           [-p | --paginate | -P | --no-pager] [--no-replace-objects] [--no-lazy-fetch]
           [--no-optional-locks] [--no-advice] [--bare] [--git-dir=<path>]
           [--work-tree=<path>] [--namespace=<name>] [--config-env=<name>=<envvar>]
           <command> [<args>]
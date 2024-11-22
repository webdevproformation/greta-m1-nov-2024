# le serveur 

- APACHE + PHP 
- base de données MySQL 

les deux logiciels ESSENTIELS pour construire des sites internet 

# PHP 

- langage SERVEUR 
- exécuté via APACHE
- ne pas confondre avec html / CSS / js => langage CLIENT (exécuté par le navigateur web)
- ATTENTION dans un fichier `.php` on peut écrire des balises html 

```php
<?php 
# 02-exemple.php 
echo "bonjour";
```

=> j'ai une page blanche => n'est pas compris par le navigateur / ne l'exécute pas correctement 

=> pour exécuter un fichier `.php` il faut 
    - mettre ce fichier dans un dossier SPECIAL => dans dossier référencé par APACHE  (il faut que ce soit le même dossier QUE le VagrantFile)
    - http://192.168.33.10/02-exemple.php
    - tu l'as trouve dans le fichier VagrantFile
    
=> MAMP
    - Finder > Application > htdocs 
    - http://localhost:8888/02-exemple.php
    - 

-----

# cas pratique

- Dans le dossier (qui contient VagrantFile / htdocs)
- créer une fichier qui s'appelle 03-exo.php

- ce fichier contient le html / php suivant :

```php
<h1>exo1</h1>
<p><?php echo date("Y-m-d H:i:s") ?></p>
```

- exécuter votre script php 

- http://192.168.33.10/03-exo.php
- http://localhost:8888/03-exo.php
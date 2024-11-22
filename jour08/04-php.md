# PHP

- quand on execute du php => fichier `php.ini`
- dès que le serveur Apache est lancé => automatiquement le fichier `php.ini` est appelé qui est CENTRAL dans le fonctionnement du langage 

```
# permettre d'accéder à la machine (son contenu)
vagrant ssh 
# mettre en super admin de la machine virtuelle
sudo su - 
# ouvrir le fichier php.ini
vim /etc/php/8.3/apache2/php.ini 
```

# le fichier php.ini

=> gros tableau qui contient des directives => instructions de fonctionnenment du langage
=> ; toutes les lignes qui commencent avec un ; => commentaire 


```sh
engine = On
```

clé = valeur

```sh
# afficher les messages d'erreurs clairement dans le navigateur
error_reporting = E_ALL
display_errors = On

# mise en place d'extension pour le langage PHP
# gd => retouche d'image
extension=gd
# communiquer avec une base de données
extension=mysqli

# le serveur ne donne pas la date et l'heure du bon fuseau horaire 
;date.timezone =
date.timezone = Europe/Paris
```

# cas pratique

modifier le fichier php.ini et lui mettre le fuseau horaire de Paris
par défaut => le fueau horaire est celui de l'Angleterre / Berlin 
le mettre sur Paris

=> https://www.php.net/manual/fr/timezones.europe.php

voir le fichier php ini
```
vagrant ssh
sudo su - 
vim /etc/php/8.3/apache2/php.ini
/date.timezone  Enter puis sur la touche n(ext)
;date.timezone
(recherche dans le fichier php.ini) 
```

modifier le fichier php.ini et redémmarrer le serveur apache

```
# sortir 
Echap 
:q
Enter
sudo su -
sed -i "s/;date.timezone =/date.timezone = Europe\/Paris/" /etc/php/8.3/apache2/php.ini
/etc/init.d/apache2 restart
```

## devops 

frontière entre dev et devops

devops dev ET installer des machines qui contiennent notre code 
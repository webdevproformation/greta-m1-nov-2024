# rappels 

## rappel git et github

## site internet exécuté par 2 machines

- machine => client 
- machine => serveur

## client 

- faire une demande (requête HTTP ) 
- reçue par le serveur qui va la traiter
- le serveur revoit le résultat sous forme de html / css / js
- client va mettre en forme html / css / js

## voir une requête HTTP ?? 

1. ouvrir un navigateur web
1. inspecter > onglet network 
1. tableau 
    1. chaque ligne est une requête qui est envoyée du client vers le serveur

- status  => 200 / 404 / 500
- cookie => information qui permet au serveur de connaitre le client
    - authentification => distinguer les types d'utilisateurs sur le site 
        - Administrateur
        - Visiteur
        - Gestionnaire ...
- l'adresse internet du serveur interrogé === 
    - https://www.lemonde.fr/
    - 199.232.170.217:443 (adresse de la machine)
    - réconciliation DNS 
- méthode => GET / POST / PUT / DELETE  <====> CRUD 
    - GET => afficher des infos READ
    - POST => formulaire créer un nouveau profil  CREATE
    - PUT => formulaire mise à jour d'un profil UPDATE
    - DELETE => formulaire supprimer le profil  DELETE 

## serveur

PORT d'écoute 

=> 80 => Service qui écoute sur ce PORT => APACHE  => http
=> 443 => Service qui écoute sur ce PORT => APACHE  => https
=> port 22 => Service qui écoute sur le PORT => FTP / SSH 
=> 3306 => Service qui écoute sur PORT => MySQL MariaDB => base de données 


## PHP ???

PHP => le langage => module de Apache 
=> pour la partie VagrantFile (partie provision - installation des logiciels du serveur)

```sh
# apt => logiciel du monde de UBUNTU aptitude / logiciel qui permet d'installer des logiciels pour les distribution Ubuntu
# install => opération d'installer sinon vous pouvez aussi saisir remove 
# liste des 11 logiciels à installer 
# libapache2-mod-php8.3 => le logiciel qui fait le lien entre APACHE ET PHP 

apt install php8.3 libapache2-mod-php8.3 php8.3-cli php8.3-{zip,bz2,gd,curl,mbstring,intl,mysql,xdebug} -y
```

## install virtualbox et vagrant

### pour les ordinateurs de l'école (Linux UBUNTU 24)

```sh
sudo su -
apt install virtualbox # installer Version 7 de virtual box

# attention il faut installer une version 2.3 ... de Vagrant 

wget https://releases.hashicorp.com/vagrant/2.3.7/vagrant_2.3.7-1_amd64.deb # télécharger le fichier executable
sudo dpkg -i vagrant_2.3.7-1_amd64.deb
```

## pour les ordinateurs personnels Windows

-  virtualbox => https://www.virtualbox.org/wiki/Downloads (exécutable 7.1.4)
-  vagrant => https://developer.hashicorp.com/vagrant/install?product_intent=vagrant (AMD64)

## pour les ordinateurs personnels MacOS

- solution alternative => installer MAMP => https://www.mamp.info/

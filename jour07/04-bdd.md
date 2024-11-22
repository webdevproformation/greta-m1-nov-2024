# base de données

dans le terminal

```sh 
mysql -v
```

```
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 36
Server version: 10.3.39-MariaDB-0ubuntu0.20.04.2 Ubuntu 20.04
```

## il faut créer un profil utilisateur 

```
# créer un utilisateur newuser 
# login : newuser
# password : password
CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
# donne des droits
GRANT ALL PRIVILEGES ON *.* TO 'newuser'@'localhost';
# executer
FLUSH PRIVILEGES;
# sortir 
exit 
```


```
CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'newuser'@'localhost';
FLUSH PRIVILEGES;
exit 
```

# phpMyAdmin

- apache
- php 
- php.ini 
- mariadb => base de données
- phpMyAdmin 

=> http://192.168.33.10/pma/
=> login : newuser
=> password : password

=> interface visuelle qui permet de voir le contenu de sa base de données 


=>  créer / modifier / supprimer des bases données VISUELLEMENT
=> créer une base de données "premier"
=> créer une table qui s'appelle user qui contient 2 colonnes
=> prenom 
=> nom 

=> Alain DOE 
=> Béatrice DOE 


- PHP
- SQL (langage) / mySQL / Mariadb (serveur) / phpMyadmin 
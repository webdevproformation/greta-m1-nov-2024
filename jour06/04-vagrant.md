
# site internet

exécuter via 2 machines 

    - votre ordinateur => navigateur web (adresse internet)
    - traiter via un autre ordinateur => SERVEUR / hébergement
        - recevoir les demandes des clients 
        - traiter 
            - base de données 
            - code sources 
        - renvoyer vers le client => html / css / javascript 
    - le navigateur web de votre ordinateur reçoit   html / css / javascript 

# pour créer un vrai site internet

- navigateur web (client)
- serveur 

# serveur 

    - ordinateur un peu spécial 
    - qui contient certain logiciel => Apache => 
    - logiciel qui fait le lien entre demande le code source

# comment créer un serveur avec APACHE ?

1. solution 1 => OVH / Microsoft Azure / Amazon => louer une machine ou une partie de machine et ils me garantissent QUi contient apache => https://www.ovhcloud.com/fr/web-hosting/starter-offer/
2. solution 2 => créer une machine virtuelle en local
    1. dans mon ordinateur créer un ordinateur 
    1. => solution que je veux vous montrer !!!
3. solution 3 : installer un logiciel qui va ressembler à un server local
    1. XAMPP => X Cross Apache MySQL PHP Perl
    1. MAMP  => MacOS Apache  MySQL PHP 


# une machine virtuelle 

- ordinateur dans un ordinateur 
- VirtualBox (logiciel que l'on va installer)
- VMWare (logiciel que l'on va installer nécessite une licence)
- ça ressemble au concept de partition 


# pour créer une machine virtuelle

- installer Virtualbox / Vmware
- choisir un System d'exploitement 
    - va avoir son système d'exploitation Linux
    - Debian  xxxx
    - Ubuntu  xxxx
    - Alpine
    - Fedora
    - Mandriva
    - Gentoo 
    - Windows => Windows Server 

# choisir le système d'exploitation 

- fichier spécial => ISO 
- https://www.debian.org/distrib/index.fr.html
- vous devez vhoisir vous même parmis les différentes version du fichier ISO
- nécessite de connaitre le type de processeur on utilise ??? 
- Attention de choisir l'ISO qui est compatible avec votre machine 

# installer des logiciels 

- installer APACHE 
- installer MySQL 

# configuration 

- définir le comportement des logiciels 

# Vagrant 

- fichier VagrantFile qui contient du texte définir 
    - OS / version
    - les logiciels à installer 
    - configuration à réaliser 

Le plus dur c'est de créer le fichier VagrantFile, une fois qu'il est prêt 
juste à réutiliser ce fichier pour créer de nouvelles machines virtuelle 

# Docker

- dockerfile =>  qui contient du texte définir 
    - OS / version
    - les logiciels à installer 
    - configuration à réaliser  

# As A Service

- SaaS => Software As A Service 
- IaaS => Infrastructure As A Service 


# A installer 

1. Installer VirtualBox

```bash
cat /etc/lsb-release
```

1. Installer Vagrant 

https://www.vagrantup.com/
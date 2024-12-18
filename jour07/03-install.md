# vagrant pour installer notre serveur 

```rb
Vagrant.configure("2") do |config|

  # Système d'exploitation 
  # en fonction du Système d'exploitation ET de sa version la manière d'installer les logiciels n'est pas la même
  # certains logiciels ne sont pas disponibles par exemple de vieille version de PHP  5 pour l'OS
  # ubuntu/trusty64 => Ubuntu version 14 => pas la même manière d'installer des logiciels 
  # plus tard dans le fichier Vagrant => add-apt-repository ppa:ondrej/php -y

  config.vm.box = "bento/ubuntu-20.04"
  config.vm.box_version = "202407.23.0"

  # IP de la machine et le port de transfert sur VirtualBox
  # télécom => comment les machines s'identifient
  config.vm.network "forwarded_port", guest: 80, host: 1234, host_ip: "127.0.0.1"
  config.vm.network "private_network", ip: "192.168.33.10"

  # dossier partage de fichier 
  config.vm.synced_folder ".", "/var/www/html"

  # isntaller des logiciels (services / logiciels) dans notre Machine Virtuelle qui 
  # qui va jouer le rôle de Serveur WEB
  config.vm.provision "shell", inline: <<-SHELL
     # apt => git logiciel en ligne de commande
     # aptitude => logiciel qui permet de télécharger et installer un logiciel dans une Distribution Ubuntu 
     # snap
     # flatpak
     # https://appimage.org/

     apt update
     apt upgrade
     # apt install <nom logiciel> 
     # liste de 30 dépôts logiciel => vim existe ??
     # vim est adapté à ma version de Ubuntu avec mes dépendances 
     # si tout OK => télécharger ET installer 
     # install 5 logiciels 
     #  VIM => éditeur de texte en ligne de commande
     # wget => télécharger en ligne de commande
     # apache2 => notre serveur apache
     # unzip => dézipper des fichiers
     # net-tools => écouter le réseau
     apt install vim wget apache2 unzip net-tools -y 

     # php
     apt install ca-certificates apt-transport-https software-properties-common lsb-release -y
     # dépôt qui permet de choisir la version de PHP 
     add-apt-repository ppa:ondrej/php -y
     apt update
     apt upgrade
     # installe de PHP8.3 
     apt install php8.3 libapache2-mod-php8.3 php8.3-cli php8.3-{zip,bz2,gd,curl,mbstring,intl,mysql,xdebug} -y
     
     # mode développement
     # modifie les fichiers de configurations de PHP 
     sed -i "s/;extension=gd/extension=gd/" /etc/php/8.3/apache2/php.ini
     sed -i "s/;extension=mysqli/extension=mysqli/" /etc/php/8.3/apache2/php.ini
     sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php/8.3/apache2/php.ini
     sed -i "s/display_errors = .*/display_errors = On/" /etc/php/8.3/apache2/php.ini
     
     # mariadb
     # installer la serveur de base de données 
     apt install mariadb-server -y 

     # modifie les fichiers de configurations de MariaDB  
     sed -i "s/.*bind-address.*/bind-address = 0.0.0.0/" /etc/mysql/mariadb.conf.d/50-server.cnf

     # restart services
     service apache2 restart
     service mysql restart

     # phpmyadmin 
     # télécharger PHP myadmin
     wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.zip -O /var/www/html/pma.zip
     cd /var/www/html
     unzip -q /var/www/html/pma.zip
  SHELL
end

```
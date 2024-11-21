# premier SERVEUR

- créer un dossier tout neuf
- sélectionner avec Visual Studio Code
- lancer un terminal => `vagrant init`
- créer une fichier `Vagrantfile`
- écrit en ruby (langage informatique)
    - tableau     
    - clé = valeur 

- config.vm.box = "base" => Système d'exploitation
- # commentaire
- # config.vm.box_check_update = false 

- adresse ip de la machine => nom de domaine => adresse machine
- config.vm.network "private_network", ip: "192.168.33.10"

- dossiers partagés entre la machine virtuelle ET la machine host 
- # config.vm.synced_folder "../data", "/vagrant_data" 

- caractéritiques de la machine virtuelle
- quantité disque dur
- puissance du processeur
- quantité de RAM 
- \|/-[]
- | pipe 
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end

- provision => le fait d'installer des logiciels et réaliser leurs réglages

# config.vm.provision "shell", inline: <<-SHELL
#   apt-get update
#   apt-get install -y apache2
# SHELL
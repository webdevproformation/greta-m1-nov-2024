# théorie que les machines Virtuelles / hébergement


- client => Firefox / Chrome / Edge 
- requête http 


# firefox 

- https://google.fr
- clique droit > Inspecter > réseau 
- chaque ligne => demande du client (firefox) vers le serveur (google.fr)
- tableau des requêtes HTTP réalisées 
    - état => 200 / 204 / 304 / 404 / 500 
        - 2xx => le serveur a bien reçu la demande ET l'a traité correctement 
        - 3xx => le serveur a bien reçu la demande MAIS va le diriger vers un autre serveur 
        - 4xx => le server a bien reçu la demande MAIS il y a un blocage 
            - 404 => page introuvable 
        - 5xx => le server ne peut pas traiter la demande => ERREUR / bug fatal pour le serveur
            - 500 => erreur fatale 
    - méthode => CRUD 
        - GET => lorsque l'on veut lire une page => afficher une page READ
        - POST  => lorsque je remplis un formulaire et que j'envoie des informations du client vers le serveur CREATE
        - PUT => lorsque je remplis un formulaire et que j'envoie des informations du client vers le serveur UPDATE
        - DELETE => lorsque je remplis un formulaire et que j'envoie des informations du client vers le serveur DELETE
    - domaine
        - google.fr ==== IP du serveur 142.250.179.67:443 => Réconciliation DNS 
        - dans le fichier VagrantFile => config.vm.network "private_network", ip: "192.168.33.10"
    - informations en + :
        - cookie 
            - Cookie
	__Secure-ENID=24.SE=ccItUFxYXM-Hmf1bto_bL7aEM_62SrNLyuQtCy7IISmSBredf9keNiWpYCNV8eG3WQQZFXP9uGAv3xVU1luMaApAjDoa83dHMoAV6N-p2mvR4o3r77E-tJDOlYAZnmqytBNMMEs2C9U4uIBIL9lGDNDMAxl5U_bfJ9iv2qFkKJ_X-A5Jd_xxYyDzzkkoIazc9s-AmLeIR-McmwmkqMWe9taxlEYUF5m6kEpM86I1grkXwqNJP3hS2d4QBUHY2A; AEC=AZ6Zc-VY9l4xmc7Q54pK69buDl_I1I3lpICwKd5-amfgAAeeI57qMSIE_A    
            - texte qui est public et crypté donc vulnérable MAIS qui contient des informations comme :
                - quand es tu venu la dernière fois sur le site 
                - qu'est ce que tu as acheté
                - est ce que tu as un compte Gmail ? 
                - si tu t'es connecté => profil 
                - 
            - cookie d'authentification => permet de savoir qui est en train de faire des demandes au serveur
            - cookie publicitaire => trace ton activité => permet de te faire des propositions "pertinentes"
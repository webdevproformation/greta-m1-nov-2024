<?php 
# http://192.168.33.10/04-connexion.php

# 1 connexion à la base
$url = "mysql:host=localhost;dbname=premier;charset=utf8mb4";
$connexion = new PDO($url , "newuser", "password");
# var_dump($connexion);

# 2 requete SQL pour récupérer les profils utilisateurs
$request = $connexion->query("SELECT * FROM user");
$users = $request->fetchAll();

// $users = [ [ "prenom" => "Alain" , "nom" => "DOE" ] ,  [  "prenom" => "Béatrice" , "nom"=> "DOE"  ]  ]

# var_dump($users);
# 3 afficher les profils en html
?>
<h1>liste des utilisateurs : </h1>
<ul>
<?php foreach($users as $user) : ?> <!-- foreach() => boucle  -->
    <li><?= $user["prenom"] ?> <?= $user["nom"] ?> </li>
<?php endforeach ?>
</ul>
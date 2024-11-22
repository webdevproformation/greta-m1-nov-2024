<?php 
# http://192.168.33.10/06-exo.php

# 1 connexion base de données
$url = "mysql:host=localhost;dbname=exo1;charset=utf8mb4";
$connexion = new PDO($url , "newuser" , "password");
# var_dump($connexion);

# 2 requête SQL 
$stmt = $connexion->query("SELECT * FROM article"); 
// SQL demande récupérer tous les articles
$articles = $stmt->fetchAll();
# var_dump($articles);

# 3 afficher les données dans la page web 
?>
<?php foreach($articles as $article  ) : ?>
    <h2><?= $article["titre"] ?></h2>
    <p><?=  $article["auteur"] ?></p>
<?php  endforeach ?>
<style>
    h2, p{
        text-align: center;
        font-family: sans-serif;
    }
</style>
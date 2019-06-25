<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil - Tableau de bord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="dashboardstyle.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
<header class="menu">
        <a href="index.html">
            <div class="accueil"><i class="fas fa-home">Revenir sur mon site</i></div>
        </a>
        
    </header>
    <p>Voici les messages que vous avez reçus sur votre site :</p>
<?php
try
{
    $sql = new PDO('mysql:host=localhost;port=3308;dbname=site_cv;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$response = $sql->query('SELECT * FROM `message`');

while ($donnees = $response->fetch())
{
?>




        <p>
        <strong>Id => </strong> <?php echo $donnees['Id']; ?><br />
        <strong>Nom => </strong>  <?php echo $donnees['nom']; ?><br />
        <strong>Prenom => </strong>  <?php echo $donnees['prenom']; ?><br />
        <strong>Email => </strong>  <?php echo $donnees['email']; ?><br/>
        <strong> Message => </strong>  <?php echo $donnees['msg']; ?> <br/>
        </p>



</body>
<?php
}

$response->closeCursor(); 

?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</html>
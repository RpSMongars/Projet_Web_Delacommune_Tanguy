<?php 
if(isset($_POST) && !empty($_POST)) {
    $sql = 'INSERT INTO `message` (`nom`, `prenom`, `email`, `msg`) VALUES ("'.$_POST['nom'].'", "'.$_POST['prenom'].'", "'.$_POST['email'].'", "'.$_POST['msg'].'" )';
execute($sql);
}

function execute($insertinto)
{
  $user = "root";
  $password = "";
  $db = "site_cv";
  $host = "localhost";
  $port = 3308;

  $link = mysqli_init();
  $success = mysqli_real_connect($link,$host,$user,$password,$db,$port);

  $response = mysqli_query($link,$insertinto) or die ('Erreur : '.mysqli_error($link));
  mysqli_close($link);

  return $response;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Message envoyé</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
    <header class="headcontainer">
        <div class="photocontainer"></div>
        <div class="menucontainer">
            <a href="index.html">
                <div class="accueil"><i class="fas fa-home"> Accueil</i></div>
            </a>
            <a href="skills.html">
                <div class="competences"><i class="fas fa-book"> Compétences</i></div>
            </a>
            <a href="formations.html">
                <div class="formations"><i class="fas fa-graduation-cap"> Formations</i></div>
            </a>
            <a href="exp_pro.html">
                <div class="exp_pro"><i class="fas fa-briefcase"> Expériences Professionnelles</i></div>
            </a>
            <a href="about.html">
                <div class="about"><i class="fas fa-folder"> A propos</i></div>
            </a>
            <a href="contact.html">
                <div class="contact"><i class="fas fa-phone-square"> Contact</i></div>
            </a>
        </div>
    </header>
    <div class="contactmaincontainer">
        <div class="contactmidcontainer">
            Votre message a bien été envoyé.
            <a href = "index.html">Cliquez ici pour retourner sur l'écran d'accueil</a>
        </div>
    </div>


</body>

</html>
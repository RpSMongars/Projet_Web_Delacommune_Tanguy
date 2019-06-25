<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Se connecter</title>
        <link rel="stylesheet" type=text/css href="dashboardstyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <body>
      <?php
include("connection.php");
if(isset($_POST['action']))
{
  $REQ = $connect->query('SELECT * FROM admin WHERE name ="' .$_POST["name"].'"');
  $log = $REQ->fetch();

  if($log['name'] == $_POST["name"] && $log['password'] == $_POST["password"]) {
    $_SESSION['id'] = 1;
    header('Location: dashboardindex.php');
  }
}
?>
        <div class="logincontainer">
            <h1>Se connecter</h1>
            <form method="post" action="#">
            <div class="textbox">
                   <input type="text" placeholder="Identifiant" name="name" value"">
                </div>

                <div class="textbox">
                    <input type="Password" placeholder="Mot de passe" name="password" value"">
                </div>

                <button class="button" type="submit" name="action" value="Se connecter">
                    Connexion
                </button>
            </form>

        </div>
    </body>

</html>

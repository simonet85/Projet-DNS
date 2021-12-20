
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Accueil</title>
</head>
<body>
<?php 
    require "connexion.php" ;

    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
        echo $nom = stripslashes($_POST['nom']);
        echo $nom = mysqli_real_escape_string($con,$nom);
        echo $prenom = stripslashes($_POST['prenom']);
        echo $prenom = mysqli_real_escape_string($con,$prenom);
        echo $email = stripslashes($_POST['email']);
        echo $email = mysqli_real_escape_string($con,$email);
        echo $password = stripslashes($_POST['motdepasse']);
        echo $password = mysqli_real_escape_string($con,$password);
      
        $query = "INSERT into `users` (nom, prenom, email, password)
    VALUES ('$nom', '$prenom', '$email', '".md5($password)."')";
            $result = mysqli_query($con,$query);

            echo $result;

            if($result){
                echo "<div class='form'>
                <h3>Enregistrement réussi</h3>
                <br/>Click here to <a href='login.php'>Connexion</a></div>";
            }
        }else{
?>
<div class="form">
<h1>Registration</h1>
    <form method="post">
        <input type="text" name="nom" placeholder="Nom"><br>
        <input type="text" name="prenom" placeholder="Prenom"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="motdepasse" placeholder="Mot de passe"><br>
        <input type="submit" name="submit" value="Enregistrer">
    </form>
    <p>Cliquer ici pour vous <a href='login.php'>Connecter</a></p>
 
</div>
<?php } ?>

</body>
</html>
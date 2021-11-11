
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
<?php 
    require "connexion.php" ;
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
        $nom = stripslashes($_POST['nom']);
        $nom = mysqli_real_escape_string($con,$nom);
        $prenom = stripslashes($_POST['prenom']);
        $prenom = mysqli_real_escape_string($con,$prenom);
        $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_POST['motdepasse']);
        $password = mysqli_real_escape_string($con,$password);
      
        $query = "INSERT into `users` (nom, prenom, email, password)
    VALUES ('$nom', '$prenom', '$email', '".md5($password)."')";
            $result = mysqli_query($con,$query);

            if($result){
                echo "<div class='form'>
                <h3>Enregistrement réussi</h3>
                <br/>Click here to <a href='login.php'>Connexion</a></div>";
            }
        }else{
?>
    <form method="post">
        Nom: <input type="text" name="nom"><br>
        Prenom: <input type="text" name="prenom"><br>
        Email: <input type="email" name="email"><br>
        Mot de passe: <input type="password" name="motdepasse"><br>
        <input type="submit" name="submit" value="Enregistrer">
    </form>

<?php } ?>

</body>
</html>
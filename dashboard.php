<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header("Location: login.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
<div class="nav">
    <div class="nav-left">
        
        <ul class="nav__ul-left">
            <li class="nav__li-left">
                <a class="nav__link-left" href="dashboard.php">Tableau de bord</a>
            </li>
        </ul>

    </div>
    <div class="nav-right">
        <ul class="nav__ul-right">
            <li class="nav__li-right">
                <a class="nav__link-right" href="dashboard.php">
                    Bienvenue : <?php echo $_SESSION['email']; ?>
                </a>
            </li>
            <li class="nav__li-right">
                <a class="nav__link-right" href="logout.php">
                  Déconnexion
                </a>
            </li>
        </ul>
    </div>

</div>
<div class="container">
    <p class="dash__title">Zone Administrative</p>
</div>

  
</body>
</html>
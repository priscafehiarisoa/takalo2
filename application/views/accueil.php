<?php
    if(!isset($_SESSION['utilisateur'])){
        header('Location:login.php');
    }else{
        $user = array();
        $user = $_SESSION['utilisateur'];
        echo $user['nom'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>

<p>Bienvenue</p>

</body>
</html>

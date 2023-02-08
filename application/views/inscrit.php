<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">

    <title>Inscription</title>
</head>
<body>
        <form action="<?php echo base_url('welcome/inscription/');?>" method="post">
            <p><input type="text" name="nom" placeholder="nom *"></p>
            <p><input type="text" name="email" placeholder="email *"></p>
            <p><input type="password" name="mdp" placeholder="password *"></p>
            <button>Ok</button>
        </form>
</body>
</html>
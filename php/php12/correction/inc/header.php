<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<header id="masthed">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <?php if(isAdmin()) { ?>
                <li><a href="admin/index.php">Admin</a></li>
            <?php } ?>

            <?php if(!isLogged()) { ?>
                <li><a href="register.php">Inscription</a></li>
                <li><a href="login.php">Connexion</a></li>
            <?php } else { ?>
                <li><a href="logout.php">Déconnexion</a></li>
            <?php } ?>

        </ul>
    </nav>
</header>
<!DOYTPYE html>
<html lang="de">
    <head>
        <title>Formular Daten in Datenbank speichern</title>
        <meta chartset="utf-8">
        <meta name="author" content="Andre Gaertner">
        <meta name="description" content="Seminarverwaltung">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <img id="logo" src="img/logo.png" alt="logo" />
            <?php 
            /**
             *  Show LoginForm and registration or Logout Button 
             */
            echo headform();
            ?>
        </header>
        <?php require_once '_navigation.tpl.php'; ?>
        <?php            require_once 'views/_navigation.tpl.php'; ?>
        <div id="wrapper">
                <?php require_once 'views/' . $view . '.tpl.php';?>
        </div>
        <footer>&copy; Copyright 2016 Andre G&auml;rtner</footer>
    </body>
</html>
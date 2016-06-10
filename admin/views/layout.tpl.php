<!DOYTPYE html>
<html>
    <head>
            <title>Administrator Dashboard</title>
            <meta chartset="utf-8">
            <!--[if IE]>
                <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="css/style.css">
            
            <!--Datepicker jQuery-->
            
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <link rel="stylesheet" href="/resources/demos/style.css">
            <script>
                $(function() {
                  $( ".datepicker" ).datepicker(
                                                { 
                                                    dateFormat: 'dd.mm.yy',
                                                    //showOn: 'button'
                                                }
                                                );
                  
                });
            </script>
            <script type="text/javascript" src="js/validatescript.js"></script>
            
    </head>
    <body>
        <div id="wrapper">
            <header id="header">
                <a id="canvas-menu"><i class="material-icons">menu</i></a>
                <?php 
                // echo '<p>'.$admin.'</p>';
                ?>
                <a href="index.php?action=logout"><i class="material-icons">settings_power</i></a>
            </header>
            <aside id="left-nav">
                <img src="../img/logo.png" alt="logo" />
                <h2>Dashboard</h2>
                
                <?php require_once '_navigation.tpl.php'; ?>
                <footer> Copyright &copy 2016 Andre Gärtner</footer>
            </aside>
            <article id="article">
                <?php require_once '_flash_message.tpl.php'; ?>
                <?php require_once '_errors.tpl.php'; ?>
                <?php require_once 'views/' . $view . '.tpl.php';?>
            </article>
        </div>
        <script>
            canvasmenu = document.getElementById('canvas-menu');
            if(canvasmenu){
                    canvasmenu.addEventListener("click", leftpanel);
            };


            function leftpanel()
            {
                var leftpanel = document.getElementById('left-nav'); 
                console.log(leftpanel);
                leftpanel.classList.toggle('left-panel-close');
                
                var content = document.getElementById('article');
                content.classList.toggle('full');
                
                var header = document.getElementById('header');
                header.classList.toggle('full');
                
                var leftpanel = document.getElementById('left-nav'); 
            }
        </script>
    </body>
</html>

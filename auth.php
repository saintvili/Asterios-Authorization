<html>
    <head><title>Auth</title>
       <!--Add Style-->     <link rel="stylesheet" href="https://repo-ru.asterios.ws/repo-ast-content/ast-engine/css/main.css" type="text/css" media="screen">

    </head>
    <body><center>
        <br><br><strong>Auth User</strong>
        <br><br><br>
        Your id <?php echo $_GET['id'] ?><br>
        Your Token <?php echo $_GET['token'] ?><br>
        Your Email <?php echo $_GET['email'] ?><br>
        Your Photo<br> <img src="<?php echo $_GET['photo'] ?>"/><br>

    </center></body>
</html>
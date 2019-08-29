<?php        
include_once("an_config/config.php");
?>
<html>
    <head>
        <title> Asterios Demo Auth Page</title>
        <link rel="stylesheet" href="https://repo.asterios.ws/repo-ast-content/ast-engine/css/main.css" type="text/css" media="screen">
    </head>
    <body><center><br><br>
        <strong> Demo Auth from Asterios Network</strong>
        <br><br><br><br><br>
        
        <form action='https://asterios.ws/cdn/auth/web_site'>
<input type="hidden" name="url_back" value="<?php echo $anconf['callback_url'] ?>">
            <button type="submit">Auth from Asterios</button>
            </form>
        
    </center></body>
</html>
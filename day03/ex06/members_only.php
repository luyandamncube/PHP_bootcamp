<?php
    //http authentication can be done within php
    //$_SERVER['PHP_AUTH_USER'] returns the authenticated user
    //$_SERVER['PHP_AUTH_PW'] returns the authenticated pswd

    //set valid users
    $valid_passwords = array ("zaz" => "jaimelespetitsponeys");
    $valid_users = "zaz";

    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];

    //pass & user are valid
    $validated = ($user == "zaz") && ($pass == $valid_passwords["zaz"]);

    if ($validated)
    {
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: text/html');
        echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
        echo base64_encode(file_get_contents("./img/42.png", "png"));
        echo "'>\n</body></html>\n";
    }
    else{
        header("Cache-Control: no-cache, must-revalidate");
        //authentication via http protocol
        header("WWW-Authenticate: Basic Real='My Realm'");
        header("Content-Type: text/html");
        echo "<html><body>That area is accessible for members only</body></html>";
    }
?>

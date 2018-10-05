<?php
if($_GET){
    //curl -c : specify which file you want curl to write/del (edit)
    //curl -b : pass data to http server (retrieve)
    if ($_GET["action"] === "set")
        setcookie($_GET["name"], $_GET["value"], time() + (86400 * 30));
    else if ($_GET["action"] === "del")
        setcookie($_GET["name"], $_GET["value"], time() - (86400 * 30));
    else if ($_GET["action"] === "get")
        if ($_COOKIE[$_GET["name"]])
            echo $_COOKIE[$_GET["name"]]."\n";
}
?>

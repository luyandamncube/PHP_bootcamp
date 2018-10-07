<?php
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./style.css"/>
</head>

<body>

<div class="container-1"> 
    <a href="../index.php"><img class="homelogo" src="../img/logo.jpg" alt="logo"></a>
</div>
<br></br>
<form class="form" name="sign_up_form" method="POST" action="scripts/sign_up.php">
                    Name:<input type="text" id="firstName" name="firstName" required="required" placeholder="First name" value=""/>
                    <br />
                    Surname:<input type="text" id="lastName" name="lastName" required="required" placeholder="Last name" value="" />
                    <br />
                    Phone number:<input type="text" id="phoneNumber" name="phoneNumber" required="required" placeholder="Phone number" value="">
                    <br />
                    Email:<input type="text" id="email" name="email" required="required" placeholder="Email address" value=""/>
                    <br />
                    Password:<input type="password" id="password" name="password" required="required" placeholder="Password" value=""/>
                    <br />
                    Password:<input type="password" id="confirmPassword" name="confirmPassword" required="required" placeholder="Confirm password" value=""/>
                    <br />
                    Home address:<textarea id="address" name="address" value="">Enter home address here.</textarea>
                    <button type="submit" id="submitSignUp" name="submit" value="OK">Submit</button>
            </form>	
        </div>


        <div class="footer"> 
            © yzungula &amp; lmncube 2018
        </div>
</body>


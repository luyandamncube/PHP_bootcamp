<?php
    include("init_db.php");
    
    init_database("localhost", "root", "wszedxrfc", "shop_db");
    $connect = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connect)
        die ("Connection failed: ".mysqli_correct_error());
    if ($_POST['submit'] == 'OK')
    {
        if ($_POST['password'] != $_POST['confirmPassword'])
            echo("Passwords do not match");
        else
        {
            $firstname = $_POST['firstName'];
            $lastname = $_POST['lastName'];
            $email = $_POST['email'];
            $hashed_pwd = hash("whirlpool", $_POST['password']);
            $sql = "INSERT INTO users (firstname, lastname, email_address, user_password)
                    VALUES ($firstname, $lastname, $email, $hashed_pwd)";
            if (mysqli_query($connect, $sql))
                echo("New record added to users table");
            else
                echo("Error: ". $sql . "<br />" . mysqli_error($connect));
        }
    }
    mysqli_close($connect);
?>
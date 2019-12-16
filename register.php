<?php
require_once('functions.php');
?>

<!doctype html>
    <html lang="en">
    <?php echo printHeader("Register"); ?>
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
            if(isset($_POST['inputusername']))
            {
                $uname = $_POST['inputusername'];
                $passwort = $_POST['inputPassword'];
                $passwort2 = $_POST['inputPassword-repeat'];
                if($passwort == $passwort2)
                {
                    echo "<br>Passwort stimmt überein<br>";

                    // passwort stimmt üebrein, aber efüllt es die regeln?
                    if (preg_match("/[a-z]/", $passwort) && preg_match("/[A-Z]/", $passwort) && preg_match("/[0-9]/", $passwort))
                    {    
                        echo "Das Passwort enthält Kleinbuchstaben, Großbuchstaben und Zahlen.";

                        $passwordLength = 6;
                        if (strlen($passwort) > $passwordLength) 
                        {
                            echo "Das Passwort ist mindestens $passwordLength Zeichen lang.";
                            require("./connect.php");
                            $insert = "INSERT INTO benutzer (uname, passwort) VALUES('".$uname."', '".$passwort."')";
                            if(mysqli_query($conn,$insert))
                            header("Location: ./Index.php?register=1");
                        }  
                        else
                        {
                            echo "Das Passwort muss mindestens $passwordLength Zeichen lang sein.";
                        }
                    }
                    else
                    {
                        echo "Das Passwort muss Kleinbuchstaben, Großbuchstaben und Zahlen enthalten.";
                    }
                }
                else
                {
                    echo "<br>Passwort stimmt nicht überein<br>";
                }
                
            }
        ?>
            <form class="form-signin" action="./register.php" method="post">
                <br><br><br><br><br>
                <h1 class="h3 mb-3 font-weight-normal text">Pls Sign up!</h1>
                    <br><br><label for="inputusername" class="sr-only">username address</label>
                    <input type="username" id="inputusername" class="form-control" placeholder="User name" name="inputusername" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Passwort" name="inputPassword" required>
                    <input type="password" id="inputPassword-repeat" class="form-control" placeholder="Passwort wiederholen" name="inputPassword-repeat"required>
                    <div class="checkbox mb-3">
                        <label>
                        </label>
                    </div>
                    <input type="submit" id="register-submit" class="btn btn-outline-secondary" value="Sign up!" />
            </form>
            <br><br>Already registerd? <a class="btn btn-outline-secondary" href="./Index.php">Login here</a>
        <center>
    </body>
</html>
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
        $username = @$_POST["username"];
        $passwort = @$_POST["passwort"];

        //$pw2 = "6784568";
        //echo sha1($pw2);

        $pass2 = sha1($passwort);
        

        require("./connect.php");
        $login = "SELECT uname, passwort FROM benutzer Where uname=\"$username\" AND passwort=\"$passwort\"";
        $result = mysqli_query($conn,$login);
        $row = mysqli_fetch_row($result);
    
        if(isset($row))
        {
            echo "<br><br><p class=\"text\">Herzlich Willkommen</p>";
        }
        else
        {
            header("Location: ./Index.php?login=0");
        }
    ?>
        <div>
            <center>
            <form action="age_verify.php" method="post">
                <br><br><br><p class="w5">What is your name?</p> 
                <input class="form-control form-control-lg" name="firstname" type="text" placeholder="firstname">
                <p class="w5">What is your age?</p> 
                <input class="form-control form-control-lg" name="age" type="number" placeholder="age">
                <br><br><input type="submit" name="auswahl" value="Send" class="btn btn-outline-secondary">
                <br><br><br><input type="submit" name="auswahl" value="Info" class="btn btn-outline-secondary">
            </form>
            <form action="test.html" method="post">
                <!--<br><br><br><p class="w5">Hey Lea?</p> 

                <br><br><br><input type="submit" name="auswahl" value="Ja?" class="btn btn-outline-secondary"><br><br><br>-->
            </form>
            </center>
        </div>
    </body>
</html>
<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Jekyll v3.8.6">
            <title>Signin Template · Bootstrap</title>

            <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

            <!-- Bootstrap core CSS -->
            <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

            <!-- Favicons -->
            <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
            <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
            <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
            <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
            <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
            <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
            <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
            <meta name="theme-color" content="#563d7c">
            <link href="./css/signin.css" rel="stylesheet">
            <style>
                .text{
                    color:blue;
                    font-size:100px;

                    }
                        .w{
                        width:200px;
                        float:left;
                        float:top;
                        margin-top:0px;
                        }
                        .w2{
                        width:200px;
                        position: absolute; 
                        bottom: 0;
                        left:0;
                        }
                        .w3{
                        width:200px;
                        position: absolute; 
                        bottom: 0;
                        right:0;
                        }
                        .w4{
                        width:200px;
                        float:right;
                        float:top;
                        margin-top:0px;
                        }
                        .w5{
                            color:black;
                            font-size:50px;
                        }
                        .form-control{
                            width:800px;
                        }
            </style>
        </head>
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
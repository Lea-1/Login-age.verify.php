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


            <style>
                .text{
                color:blue;
                }

                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                    }
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
                        .form-control{
                            width:800px;
                        }
            </style>
            <!-- Custom styles for this template -->
        </head>
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
            if(isset($_POST['register']))
            {
                $uname = $_POST['username'];
                $passwort = $_POST['passwort'];
                $passwort2 = $_POST['passwort2'];
                if($passwort == $passwort2)
                {
                    echo "<br>Passwort stimmt überein<br>";

                    if (preg_match("/[a-z]/", $passwort) && preg_match("/[A-Z]/", $passwort) && preg_match("/[0-9]/", $passwort))
                    {    
                        echo "Das Passwort enthält Kleinbuchstaben, Großbuchstaben und Zahlen.";    
                        if (strlen($passwort) > 601) 
                        {
                            echo "Das Passwort ist mindestens 601 Zeichen lang.";
                            require("./connect.php");
                            $insert = "INSERT INTO benutzer (uname, passwort) VALUES('".$uname."', '".$passwort."')";
                            if(mysqli_query($conn,$insert))
                            header("Location: ./Index.php?register=1");
                        }  
                        else
                        {
                            echo "Das Passwort muss mindestens 601 Zeichen lang sein.";
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
                    <input type="username" id="inputusername" class="form-control" placeholder="User name" name="username" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Passwort" name="passwort" required>
                    <input type="passwort" id="inputPassword" class="form-control" placeholder="Passwort wiederholen" name="passwort2"required>
                    <div class="checkbox mb-3">
                        <label>
                        </label>
                    </div>
                    <button type="button" class="btn btn-outline-secondary">Sign up!</button>
            </form>
            <br><br>Already registerd? <a class="btn btn-outline-secondary" href="./Index.php">Login here</a>
        <center>
    </body>
</html>
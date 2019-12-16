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
                        .w6{
                        width:1000px;
                        color:blue;
                        padding-top:50px;
                        }
            </style>
        </head>
    <body class="text-center">
    <center>
    <?php
        if($_POST['auswahl'] == "Send")
        {
            echo '    <img class="w" src="./img/Mondblume.PNG">
            <img class="w2" src="./img/Mondblume buttom spiegel.jpg">
            <img class="w3" src="./img/Mondblume buttom.jpg">
            <img class="w4" src="./img/Mondblume Spiegel .png">';
            function determineCanMakeBusiness($age) {
                if ($age >= 14) {
                    return true;
                }

                return false;
            }

            $firstname = @$_POST['firstname'];
            $age = @$_POST['age'];

            $canMakeBusiness = determineCanMakeBusiness($age);
            
            if(!isset($firstname) OR !isset($age))
            {
                echo "<p class=\"w6\">Bitte fülle das Feld richtig aus!</p>";
            }

            else if($firstname == "" OR $age == "")
            { 
                echo "<p class=\"w6\">Bite fülle alle Felder aus!</p>";
            }

            else{
                //Hier zwischen
                require("./connect.php");
                $insert = "INSERT INTO schokomuffins (firstname, age) VALUES('".$firstname."', '".$age."')";
                $save = mysqli_query($conn,$insert);
                
                //Und hier
                echo "<p class=\"w6\"> Can " . $firstname . " make business?</p>";

                if ($canMakeBusiness == true) {
                    echo "<p class=\"w6\"> Yes! Because you are " . $age . " years old.</p>";
                } else {
                    echo "<p class=\"w6\"> NO! Because you are " . $age . " years old.</p>";
                }
            }
        }
        else if($_POST['auswahl'] == "Info")
        {
            echo '<style>body{background-color:#343a40;</style>';
            echo '<br><table class="table table-sm table-dark" style="max-widht:500px";>
                <thead>
                    <tr>
                    <th scope="col">Nr.</th>
                    <th scope="col">Zeitpunkt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Alter</th>
                    </tr>
                </thead>
                <tbody>';

                require("./connect.php");
                $select = "SELECT * FROM schokomuffins";
                $save = mysqli_query($conn,$select);

                $x = 0;
                while($row = mysqli_fetch_row($save)){
                    $x++;
                    echo "<tr>
                            <th>" . $x . "</th>
                            <th>" . $row[2] . "</th>
                            <th>" . $row[1] . "</th>
                            <th>" . $row[0] . "</th>
                        <tr>";
                        
                }

                echo '</tbody>
            </table>';
        }

    ?>
    </center>
    <a href="index.php"></a> 
    </body>
</html>
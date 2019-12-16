<?php
@$seite = $_GET["seite"];
?>

<?php
$username = $_POST["username"]
$passwort = $_POST["passwort"]

$pass = sha1($passwort);

if($username == "Lea" AND $pass == "a94a8fe5ccb19ba61c4c0873d391e987982fbbd3")
    {
        echo "Herzlich Willkommen";
    }
    else
    {
        echo "Login Fehlgeschlagen";
    }
?>

<?php
/*
$email = $_POST["email"];
$kommentar = $_POST["kommentar"];

if($email == "" OR $kommentar == "")
    {
        echo "Bitte füllen Sie alle Felder aus";
    }
else
    {
        echo "Ihr Eintrag wurde gespeichert";
    }
    */
?>

<?php
/*
$email = $_POST["email"];
$kommentar = $_POST["kommentar"];
 
if($email != "" AND $kommentar != "")
   {
   echo "Ihr Eintrag wurde gespeichert";
   }
else
   {
   echo "Bitte füllen Sie alle Felder aus";
   } 
   */
?> 
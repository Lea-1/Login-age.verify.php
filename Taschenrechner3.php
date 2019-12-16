<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
<title>PHP: Einfacher Taschenrechner</title>
<link rev="made" href="mailto:sx@brix.de">
<link rev="owns" title="Stefan Brix, Wolfenbuettel, Deutschland" href="mailto:sx@brix.de">
<meta http-equiv="AUTHOR" content="Stefan Brix">
<meta http-equiv="KEYWORDS" content="Design, Webdesign, Web-Design, HTML, PHP, Taschenrechner">
<meta http-equiv="DESCRIPTION" content="Eine PHP-Übung: Programmierung eines ganz einfachen Taschenrechners.">
<link rel="stylesheet" type="text/css" href="../../_brix_form1.css">
</head>



<body bgcolor="white" text="black">

<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td align="left" valign="top"><em>
<a href="http://www.brix.de/">www.brix.de - Hauptseite</a>,  
<a href="../index.html">Computer</a>,  
<A HREF="./taschenrechner_1.0.html">Taschenrechner (sichtbares Skript)</A> 
</em></td>
<td align="right" valign="top"><em>
Stand: 2006-05-08
</em></td>
</tr>
</table>

<hr>

<h1>Der einfache PHP-Taschenrechner (v1.0)</h1>

<?PHP

if ($operation == "plus")
    {
    $ergebnis = $zahl1 + $zahl2;
    }

if ($operation == "minus")
    {
    $ergebnis = $zahl1 - $zahl2;
    }

if ($operation == "mal")
    {
    $ergebnis = $zahl1 * $zahl2;
    }

if ($operation == "geteilt")
    {
    $ergebnis = $zahl1 / $zahl2;
    }


echo "<P><STRONG>Ergebnis: ",$ergebnis,"</STRONG></P>";

?>

<form action="./taschenrechner_1.0.php" method="get">

<p>Zahl1: <input type="text" name="zahl1" size=40 maxlength=40></p>

<p>Zahl2: <input type="text" name="zahl2" size=40 maxlength=40></p>

<p>
<input type="radio" name="operation" value="plus" checked>PLUS<br>
<input type="radio" name="operation" value="minus">MINUS<br>
<input type="radio" name="operation" value="mal">MAL<br>
<input type="radio" name="operation" value="geteilt">GETEILT<br>
</p>

<p>
<input type="submit" value="Ausrechnen">
</p>

</form>

</body>
</hmtl>

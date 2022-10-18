<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>

<h1> Zadanie pai </h1>
<form action="stronka.php" method="POST">



Podaj swoje imię: <input type="text" name="imie"> <br><br>
Podaj swoje nazwisko: <input type="text" name="nazwisko">
<br><br><br>




Kobieta: <input type="radio" name="h" value="k"> <br> <br>
Mężczyzna: <input type="radio" name="h" value="m"> <br><br>
<br> <br> <br>




<input type="submit" value="wyslij" name="wyslij"><br>




</form>



<?php



if(isset($_POST['h'])){
    if($_POST['h'] == 'k') echo "Witam Panią ". $_POST['imie'] . " " . $_POST['nazwisko'] . "<br>";
    else echo "Witam Pana ". $_POST['imie'] . " " . $_POST['nazwisko'] . "<br>";
}




?>
</body>
<html>
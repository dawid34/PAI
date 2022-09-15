<html>
<head>
	<meta charset="utf-8">
	<title>Strona</title>
</head>
<body>


		<?php
         $liczba = 70;
		 if ($liczba < 40)
		
    {
        echo "Dostales jeden";
        
    }
	elseif(($liczba >=40) AND ($liczba <54))
	{
	   echo "Dostales dwa";
	}  
	   elseif(($liczba >=55) AND ($liczba <69))
	   {
	  echo "Dostales trzy";
	   }  
	   elseif(($liczba >=70) AND ($liczba <84))
	   {
	   echo "Dostales cztery";
	   }  
	   elseif(($liczba >=95) AND ($liczba <100))
	   {
	   echo "Dostales pięć";
	   }
?><hr>






	<?php
   $ksiazka = "horror";
    switch($ksiazka)
    {
        case "Kryminał":
            echo "Wybrałeś ksiazke z kategori kryminał";
            break;
        case "Bajki":
            echo "Wybrałeś ksiazke z kategori bajki";
            break;
        case "Fantastyka":
            echo "Wybrałeś ksiazke z kategori fantastyka";
            break;
        case "horror":
            echo "Wybrałeś ksiazke z kategori horro";
            break;
        case "Kryminał":
            echo "Wybrałeś ksiazke z kategori kryminał";
            break;
    }
?>
	

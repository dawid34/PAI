<?php

$tablica[0] = 10;    
$tablica[1] = 41;    
$tablica[3] = 11;    
$tablica[4] = 34; 
$tablica[5] = 76;
$tablica[6] = 89;
$tablica[7] = 37;
$tablica[8] = 91;
$tablica[9] = 19;
$tablica[10] = 73;   

	foreach($tablica as $item){
        echo "$item <br>";
    }
	$nazwa = "Cześć nazywam się dawid hahaha";
	  echo "$nazwa <br>";
		
		 $nazwa = explode(' ', $nazwa);
    print_r($nazwa);
	
	echo "<br>";
	
	echo count($nazwa);
	echo "<br>";
	echo count($tablica);
	
	sort($tablica, SORT_NUMERIC);
	sort($nazwa, SORT_STRING);
	foreach($nazwa as $item){
		echo "$item<br>";
		
  }
  foreach($tablica as $item){
		echo "$item<br>";
		
  }
	rsort($tablica, SORT_NUMERIC);
rsort($nazwa, SORT_STRING);
  echo "<br>";
  
  foreach($tablica as $item){
		echo "$item<br>";
		
  }
  
  rsort($nazwa, SORT_NUMERIC);
rsort($nazwa, SORT_STRING);

	foreach($nazwa as $item){
		echo "$item<br>";
		
		
		echo "<br>";
  }
  
  shuffle($nazwa);
  shuffle($tablica);
  
  foreach($nazwa as $item){
		echo "$item<br>";
		
		echo "<br>";
  
  }
  
   foreach($tablica as $item){
		echo "$item<br>";
		
  }





?>

<!DOCTYPE html>
<html>
<head>
</head>
<body > 


<?php

 if (!isset($_POST['txtcripter'])){
		$txtcripter = '';
}

 if (isset($_POST['txtacripter']) && isset($_POST['valKey'])){
 	 $txtacripter= $_POST['txtacripter'];
 	 $valKey= $_POST['valKey'];
	 $alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"," "];

 	  $tabTxtAcrypter = str_split($txtacripter);
 	  $txtcripter = '';
	  foreach ($tabTxtAcrypter as $key => $value) {
		 $indexLettreAcrypter = array_search($value,$alphabet);
		 $nouveauIndex = $indexLettreAcrypter + $valKey;
		 if ($nouveauIndex > 26){
		 	$nouveauIndex = $nouveauIndex -26 -1;
		 }
		 $txtcripter = $txtcripter.$alphabet[$nouveauIndex];
	  }
   }


?>

<form action="essai.php" method="post">
 <p>Texte à Cripter : <input id="txtacripter" type="text" name="txtacripter" /></p>
 
 <p>Valeur K : <input id="valKey" type="text" name="valKey" /></p>

<?php  echo ' <p>résultat criptage : <input  type="text" name="txtcripter" value="'.$txtcripter.'" /></p>'  ; ?> 
 
 <p><input type="submit" value="OK"></p>

</form>








</body>
</html>
<!DOCTYPE html>
<html>
<head>

</head>
<body > 
<!-- :::::::::::LOOP::::::::::::: -->
<h3>EXERCISE 1</h3>

<p> Afficher les n premiers chiffres </p><br>

debut = 5 <br>
fin = 12<br>
resultat : <br>
<?php 
print_r(digitDisplay(intval(5), intval(12)))  
?>



<?php

function digitDisplay ( $start,  $end){
	$result = array();
	if ( $start>0 &&  $end>0 && $end>$start) {
		for (  $i = $start ; $i<= $end ; $i++) {
			if (gmp_perfect_square($i)){
				array_push($result, "<b>".$i."</b>");
			} else { 
				if ($i%2==0){
	    			array_push($result, "<span style=\"color:blue\">".$i."</span>");
				}else{
	    			array_push($result, "<span style=\"color:red\">".$i."</span>");
				}
			}			 
		}
		 
	}else{
		array_push($result, "probleme de parametre");
	}
	return $result;
}
?>

<!-- :::::::::::::::::::::::::::::EXERCISE 2:::::::::::::::::::::::::: -->



<h3>EXERCISE 2</h3>

<p> Afficher le plus grand gap </p><br>

$tab=["3","8","22","23","5"]<br>
resultat : <br>

<?php  
$tab=["3","8","22","23","5"];
print_r(largestGap($tab))
?>



<?php

function largestGap(array $tab){
	$plusGrandEcart=0;
	for ($i=0; $i<count($tab)-1;$i++){
		 
		$nombre1=abs($tab[$i]);
		$nombre2=abs($tab[$i+1]);
 
		if($nombre1>=$nombre2){
			$ecart=$nombre1-$nombre2;
		}else{
			$ecart=$nombre2-$nombre1;
		}
		if($ecart>$plusGrandEcart){
			$plusGrandEcart=$ecart;
		}

	}
	return $plusGrandEcart;
}

?>

<!-- :::::::::::::::::::::::::::::EXERCISE 3:::::::::::::::::::::::::: -->

<h3>EXERCISE 3</h3>

<p>Jeu de la fourchette</p><br>

<?php

if (!isset($_POST['valADecouvrir']) )  {
	$valADecouvrir = rand(1,100);
	$nbEssai = 0;
     //echo $valADecouvrir.'  '.$nbEssai;
} else {
	 
	 $valADecouvrir = $_POST['valADecouvrir'];
	  //echo 'pour info nb a trouver : '.$valADecouvrir.'<br>';
	  $nbEssai = $_POST['nbEssai'] + 1;
	  $nbPropose = $_POST['number'];
	  if ($nbEssai > 8){
	  	 echo 'désolé, le nombre était : '.$valADecouvrir; 
	  } else {
	  	if ($nbPropose==null || !is_numeric($nbPropose)){
	  		echo 'il faut renseigner un nombre vous perdez une tentative';
	  	} else if ($nbPropose == $valADecouvrir) {
			echo 'bravo trouvé en '.$nbEssai.' tentative(s)';
		 } else if ( $nbPropose> $valADecouvrir) {
		 	echo 'trop grand nombre';
		 } else {
		 	echo 'trop petit nombre';
		 }  
	}
}

?>

	<form action="index.php" method="post">
	 <?php  echo '<input hidden type="text" name="valADecouvrir" value="'.$valADecouvrir.'" />'  ; ?> 
	 <?php  echo '<input hidden type="text" name="nbEssai" value="'.$nbEssai.'" />'  ; ?> 
	 
	 <p>Numero : <input id="number" type="text" name="number" /></p>
	 <p><input type="submit" value="OK"></p>
	</form>

</body>
</html>


<?php


if( isset($_POST['submit']) ){

    $to = "hugo.barcelona31@gmail.com"; 
    $prenom = $_POST['prenom'];
    $Nom = $_POST['Nom'];
    $email = $_POST['email'];
    
    $from = trim($from);
    $from = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    $message_retour = verrificateur(10, $prenom);

	mail($to, "Voila tes résultat,connard.", $message_retour);

	echo $message_retour;


}



function verrificateur($nbquestions, $prenom){

	$good = 0;
	$message = "";

	for ($i=1; $i <= $nbquestions; $i++) { 

		if ($_POST['q'.$i] == 'v' ){

			$good = $good + 1;

		}
		

	}
	
	$resultat = ((100 * $good)/$nbquestions)."%";

	 
	if ($good == 0) {

		$message = $prenom."..t'es con ou quoi ? ".$resultat."...no comment";
		
	} elseif ($good < 5 ){

		$message = "wow ".$resultat.' ! '.' bien ouej, tu es effectivement bien plus con que prevus' ;
		
	} elseif ($good == 5 ){

		$message = "..presque ".$prenom." mais ".$resultat." cest pas assez, retournes chez ta mere";
		
	} else {
		$message = $resultat.", pas mal ".$prenom." continue comme ca paumé";
		
	}
	
	
	return $message;

}


?>











<?php


if( isset($_POST['submit']) ){

    $to = "hugo.barcelona31@gmail.com"; 
    $prenom = $_POST['prenom'];
    $Nom = $_POST['Nom'];
    $email = $_POST['email'];
    
    $from = trim($from);
    $from = filter_var($email, FILTER_SANITIZE_EMAIL);
    //$_REQUEST
    $message_retour = verrificateur(10, $prenom);

    mail($to, "Voila tes résultat,connard.", $message_retour);

    echo $message_retour;


}




//rajouter dans label la fonctions

   /* elseif ($color == 'vrai') {
        echo 'class="bg-success"';}
        elseif ($color == 'faux') {
                echo "class='bg-warning'";
        }*/
        
    



?>


<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="qcm.css">
    <meta charset="UTF-8">

    <title>QCM</title>
</head>

<body>


    <section>
        <!--target="_blank" pour ouvrir une nouvelle page
	method et action pour envoyer dans receiver-->
        <h1>Quiz de culture général </h1>


        <form method="post" action="">


<div class="form-group">
    <label class="sr-only" for="exampleInputPrenom3">Prenom</label>
    <input type="text" class="form-control" id="exampleInputPrenom3" placeholder="Prenom" name="prenom">
</div>

<div class="form-group">
    <label class="sr-only" for="exampleInputNom3">Nom</label>
    <input type="text" class="form-control" id="exampleInputNom3" placeholder="Nom" name="Nom">
</div>  

<div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
</div>
  



        
    <p class="question">1. Quel est le nom du système d'exploitation mis au point par Google ?</p>

            <ul class="reponse">
                <input type="radio" name="q1" value="a" id="q1a" <?php mark_input_as_checked('q1','a') ?> >

                <label <?php color('faux') ?> for="q1a">Chrome</label><br/>
                
                <input type="radio" name="q1" value="v" id="q1b" <?php mark_input_as_checked('q1','v') ?> >
                <label <?php color('vrai') ?> for="q1b">Chrome OS</label><br/>
                
                <input type="radio" name="q1" value="c" id="q1c"<?php mark_input_as_checked('q1','c') ?> >
                <label <?php color('faux') ?> for="q1c">Chrobuntu</label><br/>
                
                <input type="radio" name="q1" value="d" id="q1d" <?php mark_input_as_checked('q1','d') ?> >
                <label  <?php color('faux','q1','d') ?> for="q1d">Safari</label><br/>
            </ul>


            <p class="question">2. Il y a 50 étudiants dans la premiere promo de Becode, David et Safia veulent trouver quel est le meilleur Formateur de la promo.
            David interroge 30 étudiants.
            Safia interroge 45 étudiants.
            David dit :"Il est plus probable que ce soit moi qui ai raison"
            Pourquoi a t'il effectivement raison ?
            </p>

            <ul class="reponse">
                <input type="radio" name="q2" value="f" id="q2a"><label for="q2a">  Safia n'a pas interrogé les bons etudiants?</label><br/>
                <input type="radio" name="q2" value="v" id="q2b"><label for="q2b">  David est un homme</label><br/>
                <input type="radio" name="q2" value="f" id="q2c"><label for="q2c"> la reponse 3</label><br/>
                <input type="radio" name="q2" value="f" id="q2d"><label for="q2d">
                    David est un poulet.
                </label><br/>
            </ul>

            <p class="question">3.Le tonton dit : "J'ai 45 ans si j'additionne mon âge et ton âge". 
            La nièce dit : "J'ai la moitié de ton âge !". 
            Le tonton dit : "Le centre de nous deux, c'est 270 mois". 
La nièce dit : "Tu es plus vieux que moi". 
Quel âge ont-ils ?</p>

            <ul class="reponse">
                <input type="radio" name="q3" value="v" id="q3a"><label for="q3a">L'oncle a 31 ans et la nièce a 14 ans.</label><br/>
                <input type="radio" name="q3" value="f" id="q3b"><label for="q3b">LOL</label><br/>
                <input type="radio" name="q3" value="f" id="q3c"><label for="q3c">L'oncle a 33 ans et la nièce a 17 ans.</label><br/>
                <input type="radio" name="q3" value="f" id="q3d"><label for="q3d">L'oncle a 30 ans et la nièce a 15 ans.</label><br/>
            </ul>

            <p class="question">4. La terre a été crée par :</p>
            <ul class="reponse">
                <input type="radio" name="q4" value="f" id="q4a"><label for="q4a">Zeuz</label><br/>
                <input type="radio" name="q4" value="f" id="q4b"><label for="q4b">Hercule</label><br/>
                <input type="radio" name="q4" value="f" id="q4c"><label for="q4c">Dieu</label><br/>
                <input type="radio" name="q4" value="f" id="q4d"><label for="q4d">Les ingenieurs (Prometheus) </label><br/>
                <input type="radio" name="q4" value="v" id="q4f"><label for="q4f">Le Big-Bang </label><br/>
            </ul>

            <p class="question">5. Quel est le plus proche parent du DODO</p>

            <ul class="reponse">
                <input type="radio" name="q5" value="f" id="q5a"><label for="q5a"> 
				Son Oncle BOBO</label><br/>
                <input type="radio" name="q5" value="f" id="q5b"><label for="q5b">Le Portugal</label><br/>
                <input type="radio" name="q5" value="v" id="q5c"><label for="q5c">T-rex</label><br/>
                <input type="radio" name="q5" value="f" id="q5d"><label for="q5d">La Tourte voyageuse</label><br/>
            </ul>

            <p class="question">6. Quel est l'animal le plus long?</p>

            <ul class="reponse">
                <input type="radio" name="q6" value="f" id="q6a"><label for="q6a">
				La Baleine Bleu</label><br/>
                <input type="radio" name="q6" value="f" id="q6b"><label for="q6b">Le Branchiosorus</label><br/>
                <input type="radio" name="q6" value="v" id="q6c"><label for="q6c">Godzilla</label><br/>
                <input type="radio" name="q6" value="f" id="q6d"><label for="q6d">Le Supersaurus</label><br/>
            </ul>

            <p class="question">7. Quel est l'élement le plus commun sur Jupiter?</p>

            <ul class="reponse">
                <input type="radio" name="q7" value="f" id="q7a"><label for="q7a">Hélium</label><br/>
                <input type="radio" name="q7" value="f" id="q7b"><label for="q7b">il n'y a pas d'atmosphere</label><br/>
                <input type="radio" name="q7" value="f" id="q7c"><label for="q7c">Du houblon</label><br/>
                <input type="radio" name="q7" value="v" id="q7d"><label for="q7d">Hydrogene</label><br/>
            </ul>

            <p class="question">8. Qu'est-ce qui s'est terminé en 1943?</p>

            <ul class="reponse">
                <input type="radio" name="q8" value="f" id="q8a"><label for="q8a">L'esclavage en europe de l'ouest</label><br/>
                <input type="radio" name="q8" value="v" id="q8b"><label for="q8b">1942</label><br/>
                <input type="radio" name="q8" value="f" id="q8c"><label for="q8c">La deuxieme guerre mondiale</label><br/>
                <input type="radio" name="q8" value="f" id="q8d"><label for="q8d">
                    La neutralité du Canada pendant la guerre froide
                </label><br/>
            </ul>
            <p class="question">9. What does the fox say?</p>

            <ul class="reponse">
                <input type="radio" name="q9" value="f" id="q9a"><label for="q9a">WA-PA-PA-PA-PA-POW</label><br/>
                <input type="radio" name="q9" value="f" id="q9b"><label for="q9b">A-ooo-oo-ooo-aoo</label><br/>
                <input type="radio" name="q9" value="f" id="q9c"><label for="q9c">
                    chawka-chawka-chawka-kaka
                </label><br/>
                <input type="radio" name="q9" value="f" id="q9d"><label for="q9d">Ring-ding-ding-ding-dingringeding</label><br/>
                <input type="radio" name="q9" value="f" id="q9e"><label for="q9e">Hatee-hatee-hatee-ho</label><br/>
                <input type="radio" name="q9" value="v" id="q9f"><label for="q9f">Toute les reponses precedente</label><br/>
                <input type="radio" name="q9" value="f" id="q9g"><label for="q9g">aucune des reponses mentionnées</label><br/>

            </ul>
            
            <p class="question">10. Les Britanniques ont voté le 23 juin pour quitter l'Union européenne. Après ce Brexit, le ministre conservateur, David Cameron, a présenté sa démission. Par qui a-t-il été remplacé ?</p>

            <ul class="reponse">
                <input type="radio" name="q10" value="f" id="q10a"><label for="q10a">L'ancien maire de Londres et porte-parole officiel du Brexit,Boris Johnson. </label><br/>
                <input type="radio" name="q10" value="f" id="q10b"><label for="q10b">La dame de Bronze , Mere de la politique morderne britanno-irlandaise,Margaret Tatcher .</label><br/>
                <input type="radio" name="q10" value="f" id="q10c"><label for="q10c">Le leader du parti eurosceptique UKIP,Nigel Farage.</label><br/>
                <input type="radio" name="q10" value="v" id="q10d"><label for="q10d">La ministre de l'intérieur de David Cameron,Theresa May. </label><br/>
            </ul>

       
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Verifier mes reponses!</button>



        </form>

    </section>

</body>

</html>

<?php
//helpers
function verrificateur($nbquestions, $prenom){

    $good = 0;
    $message = "";

    for ($i=1; $i <= $nbquestions; $i++) { 

        if ($_POST['q'.$i] == 'v' ){

            

            $good = $good + 1;

        }
        

    }
    
    $resultat = ((100 * $good)/$nbquestions)."%";
//utiliser switch 
     
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

//pour le check du radio
function mark_input_as_checked( $key, $value){
    if( isset( $_POST["submit"] ) && $_POST[$key]== $value ){
        echo 'checked="checked" ';
    }
    if( isset( $_POST["submit"] ) && $_POST[$key]== $value ){
        echo 'checked="checked"  ';
    }   
  }
  


  //la couleur rouge ou verte
  function color($color){
  if( isset( $_POST["submit"] )  && $color == 'vrai'  ){
        echo ' class="bg-success" ';
    }
    if( isset( $_POST["submit"] )  && $color == 'faux'  ){
        echo ' class="bg-warning" ';
    }
}
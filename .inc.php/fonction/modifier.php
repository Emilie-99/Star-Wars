// function modif_film(){
    //     include 'startup.php';
    //         if (isset($_POST['valider'])){
    //             if(!empty($_POST['film'])){

    //                 $title = htmlspecialchars($_POST['ititle']);
    //                 $query= "SELECT * FROM film WHERE title = ? ";
    //                 $stmt = $mysqli->prepare($query);
    //                 $stmt->bind_param('s',$title);
    //                 $stmt->execute();
    //                 $res = $stmt-> get_result();
    //                 $result = $res -> fetch_array();
    //                 $id = $result['id'];
    //                 //afficher caractéristiques du film
    //                 ?>
    //                 <p class="card-text">
    //                     Voici l'état actuel du film 
    //                     episode <?=$result['episode']?><br>
    //                     date de sortie : <?=$result['release_date']?><br> 
    //                     <p>
    //                     Synopsis : <br>
    //                     <?=$result['opening']?>
    //                     </p>
    //                 </p>

    //                 Que souhaitez vous modifier ? 
    //                 <?php
    //                 // afficher options de modifications possibles (liste déroulante)
    //                  liste_modif_film(); 
                     
    //                 // récupère l'option et affiche le formulaire correspondant
    //                 // effectue les modifications 
    //                 recup_option($id);
    //             }else{
                   
    //             }
    //         }
        

    }
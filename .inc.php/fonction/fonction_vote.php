<?php

    function fonction_vote( $etoile,$id_film){
      include 'startup.php';
    $etoile = floatval($etoile);
    $query_recup = "SELECT  * FROM note WHERE id_film = ?";
    $stmt_recup = $mysqli->prepare($query_recup);
    $stmt_recup->bind_param('s',$id_film);
    $stmt_recup->execute();
    $res=$stmt_recup->get_result();
    $result_recup=$res->fetch_array();
    $note = $result_recup['note'];
    $note = floatval($note);
    $nb = $result_recup['nb_note'];
    $nb = floatval($nb);
    $note = (($nb)*$note + $etoile)/($nb+1); // $note est un flottant 
    $nb = intval($nb);
    $nb = $nb + 1; 
    $stmt_recup-> close(); 
    
     $query = "UPDATE note SET note = ?, nb_note = ? WHERE id_film = ? ";
     $stmt = $mysqli->prepare($query);
     $stmt->bind_param('dii',$note,$nb,$id_film);
     if($stmt->execute()){
      reussite('Votre vote a bien été pris en compte');
      $stmt->close();
     }
     
    } 

    function reussite($message) {?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <?= $message?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
              </div>
            
    <?php }
    

   function recup_note($id_film):string {
    include 'startup.php';
    $query = "SELECT note FROM note WHERE id_film = ? ";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s',$id_film);
    $stmt->execute();
    $res=$stmt->get_result();
    $result_recup=$res->fetch_array();
    $note = $result_recup['note'];
    $stmt->close(); 
    return $note;

   }
   ?>
<?php 
require './fonction/fonction_vote.php';
include 'startup.php';
  $page_title = "Le monde de la force - vote";
  $no_header = true;
include 'includes/before_content.php';

if(!is_connected()){
    
    echo " Vous devez vous connecter";     
}else{

//recupérer information du film
  //photo, nom

//récupérer les informations de l'utilisateur
  //id, nom

//récupérer le vote de l'utilisateur
  //Table vote -> idUser - idFilm - nombre etoile

//tester si dans l'url il y a le paramètre etoiles
  //alors faire appel à la fonctionvote
if(!empty($_GET['etoile'])){
  $etoile = $_GET['etoile'];
  $id_film = $_GET['id'];
  fonction_vote( $etoile,$id_film);
  // reussite('Votre vote a bien été pris en compte');
}
//  on récupère la note du film 
 $note = recup_note($_GET['id']);
?><div class = 'vote'>
    <h3 class="title">Vous avez choisi de voter pour : </h3>
       <h2 class = "nom_film"> <?php echo  $_GET['nom'] ?> </h2>
         <div class = 'row'>
            <div class="col">
               
            </div>
            <div class = 'col-6'>
              <img src="../image/films/<?=$_GET['id']?>.jpg" class="card-img" >
                 Le film a pour note : <?=$note?>/5
                 
               
            </div>
            <div class="col">
               
            </div>
              <div class="rating center">
                    <a href="vote.php?etoile=5&id=<?=$_GET['id']?>&nom=<?=$_GET['nom']?>"  title="Donner 5 étoiles">☆</a>
                    <a href="vote.php?etoile=4&id=<?=$_GET['id']?>&nom=<?=$_GET['nom']?>" title="Donner 4 étoiles">☆</a>
                    <a href="vote.php?etoile=3&id=<?=$_GET['id']?>&nom=<?=$_GET['nom']?>" title="Donner 3 étoiles">☆</a>
                    <a href="vote.php?etoile=2&id=<?=$_GET['id']?>&nom=<?=$_GET['nom']?>" title="Donner 2 étoiles">☆</a>
                    <a href="vote.php?etoile=1&id=<?=$_GET['id']?>&nom=<?=$_GET['nom']?>" title="Donner 1 étoile">☆</a>
              </div>
          </div>
                
        
    
    </div>

</div>

<?php 
}
include 'includes/after_content.php';

?>



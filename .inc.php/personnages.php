<?php //include './includes/verif_co.php';
    include 'startup.php';

$res = $mysqli->query("SELECT People.*, Planet.name AS Homeworld
                        FROM People 
                        INNER JOIN Planet
                        ON People.homeworld =Planet.id");

$page_title = "Le monde de la force - personnages";


// title de la page : $page_title
include 'includes/before_content.php';


while ($perso = $res-> fetch_assoc()){ ?>
    <div class="card mb-3 card-perso">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="../image/personnages/<?=$perso['id']?>.jpg" class="card-img" alt="<?=$perso['name']?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?=$perso['name']?></h5>
                    <p class="card-text">
                        Genre : <?=$perso['gender']?><br>
                        Taille : <?=$perso['height']?> cm<br> 
                        Poids : <?=$perso['mass']?> kg<br> 
                        Planète : <?=$perso['Homeworld']?><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
<?php }


include 'includes/after_content.php';

?>


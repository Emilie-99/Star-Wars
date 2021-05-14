<?php //include 'verif_co.php';
    include 'startup.php';

$res = $mysqli->query("SELECT *
                        FROM Starship");

$page_title = "Le monde de la force - vaisseaux";


// title de la page : $page_title
include 'includes/before_content.php';
if(!is_connected()){
    
    echo " Vous devez vous connecter";     
}else{

while ($ship = $res-> fetch_assoc()){ ?>
    <div class="card mb-3 card-perso">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="../image/starship/<?=$ship['id']?>.png" class="card-img" alt="<?=$ship['class']?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?=$ship['class']?></h5>
                    <p class="card-text">
                        Megalumière par heure : <?=$ship['mglt']?><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
<?php }

}
include 'includes/after_content.php';

?>
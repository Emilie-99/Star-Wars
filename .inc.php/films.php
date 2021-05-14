<?php
    include 'startup.php';
    
    $res = $mysqli-> query("SELECT * FROM film");
    $page_title = "Le monde de la force - films";
    include 'includes/before_content.php';
    while ($film = $res-> fetch_assoc()){ ?>
        <div class="card mb-3 card-perso">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="../image/films/<?=$film['id']?>.jpg" class="card-img" alt="<?=$film['title']?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$film['title']?></h5>
                        <p class="card-text">
                            episode <?=$film['episode']?><br>
                            date de sortie : <?=$film['release_date']?><br> 
                            <p>
                            Synopsis : <br>
                             <?=$film['opening']?>
                            </p>
                        </p>
                        <div class ='liens'>
                        <a href ='plus_infos.php' id ='<?=$film['id']?>'> Voir plus d'informations </a>
                        </div> 
                        <div class ='liens'>
                        <a href = 'vote.php?nom=<?=$film['title']?>&id=<?=$film['id']?>' id = '<?=$film['title']?>'> Voter pour ce film </a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        
    <?php }
    
    
    include 'includes/after_content.php';
    
?>



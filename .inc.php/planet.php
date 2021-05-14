<?php 
    include 'startup.php';
    include './fonction/fonction_sql.php';
    
    

    

//// Build the planet array with it's climates

$res1 = $mysqli->query("SELECT * FROM Planet");

$res2 = $mysqli->query("SELECT * FROM Climate");

$res3 = $mysqli->query("SELECT * FROM HasClimate");

$array_planet = getArrayFromQueryResult($res1, 'id');
$array_climate = getArrayFromQueryResult($res2, 'id');

foreach ($array_planet as $k => $planet) {
    $array_planet[$k]['climate'] = [];
}

while ($v = $res3->fetch_assoc()){
    $array_planet[$v['id_planet']]['climate'][$v['id_climate']] = $array_climate[$v['id_climate']]['name'];
}

// var_dump($array_planet);die;



$page_title = "Le monde de la force - planètes";

// title de la page : $page_title
include 'includes/before_content.php';
//condition sur la connexion 
if(!is_connected()){
    
    echo " Vous devez vous connecter";     
}else{
?>



<div class="row row-cols-1 row-cols-md-3">
    
<?php
    foreach ($array_planet as $id_planet => $planet) { ?>
        <div class="col mb-4">
        <div class="card planet">
            <div class="card-body">
            <h5 class="card-title"><?=$planet['name']?></h5>
                <p class="card-text">
                    Diamètre : <?=$planet['diameter']?> m<br>
                    Population : <?=$planet['population']?><br>
                    Climat : 
                    <?php
                    $first = true;
                    foreach ($planet['climate'] as $id_climate => $climate) {
                        if (!$first) {
                            echo ', ';
                        } else {
                            $first = false;
                        }
                        echo $climate;    
                    } ?>
                    <br>
                </p>
            </div>                   
        </div>
    </div>
    <?php } ?>

</div>

<?php
}
include 'includes/after_content.php';
?>
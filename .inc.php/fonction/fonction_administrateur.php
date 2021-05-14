<?php
  include 'fonction_vote.php'; // pour inclure la fonction de réussite
    function ajouter_film(){
        include 'startup.php';
            if (isset($_POST['valider'])){
                if(!empty($_POST['ititle']) AND !empty($_POST['idate']) AND !empty($_POST['iepisode']) AND !empty($_POST['isynopsis'])){

                    $title = htmlspecialchars($_POST['ititle']);
                    $date = $_POST['idate'];
                    $episode = htmlspecialchars($_POST['iepisode']);
                    $synopsis = htmlspecialchars($_POST['isynopsis']);
                    $query= "INSERT  INTO film (title,release_date,episode,opening) VALUES (?,?,?,?)";
                    $stmt = $mysqli->prepare($query);
                    $stmt->bind_param('ssss',$title,$date,$episode,$synopsis);
                    if($stmt->execute()){
                       reussite('Un film a été ajouté');
                    }else{

                    }
                }else{
                   
                }
            }else{

            }
    }

    function supprimer_film(){
        include 'startup.php';
            if (isset($_POST['validersup'])){
                if(!empty($_POST['film'])){
                    
                    $id = $_POST['film'];
                    $query= "DELETE FROM film WHERE id = ? ";
                    $stmt = $mysqli->prepare($query);
                    $stmt->bind_param('s',$id);
                    if($stmt->execute()){
                       reussite('Un film a bien été supprimé');
                    }else{
                        echo "Non supprimé";
                    }
                   
                }else{
                   
                }
            }else {
                
            }
    }

    
    function form_add(){?>
    
           
                <form method="post" id='addform' novalidate>
                    <div class="form-group">
                        <label id="ltitle">Entrer le titre du film</label>
                        <input  placeholder="Titre du film" name ="ititle" class="form-control" id="ititle" >
                    </div>
                    <div class="form-group">
                        <label id="ldate">Entrer la date de sortie</label>
                        <input  placeholder="Date" type ="date" name ="idate" class="form-control" id="idate" >
                    </div>
                    <div class="form-group">
                        <label id="lepisode">Entrer l'episode du film</label>
                        <input  placeholder="Episode film" name ="iepisode" class="form-control" id="iepisode" >
                    </div>
                    <div class="form-group">
                        <label id="lsynopsis">Entrer le synopsis du film</label>
                        <input  placeholder="Synopsis" name ="isynopsis" class="form-control" id="isynopsis" >
                    </div>
                    <button type="submit" name="valider"  class="btn btn-primary">Valider</button>
                </form>  
    <?php        
    }
    // recuperer la liste des films 
    function list_supp(){
            include 'startup.php';
            
            $res = $mysqli->query("SELECT id,title FROM FILM");?>
            <form method = 'post'>
                <select name="film" id="function-select">
                <?php
                while ($film = $res-> fetch_assoc()){ ?>                                            
                    <option value="<?= $film['id'] ?>"><?= $film['title'] ?></option>                                   
                    <hr>
                <?php
                }
                ?>
                </select>
                <button type="submit" name="validersup"  class="btn btn-primary">Valider</button>
           </form>
    <?php
    }

    function list_deroulante(){
        include 'startup.php';
            $res = $mysqli->query("SELECT id,title FROM FILM");?>
            <select name="film" id="function-select">
            <?php
            while ($film = $res-> fetch_assoc()){ ?>                                            
                <option value="<?= $film['id'] ?>"><?= $film['title'] ?></option>                                   
                <hr>
            <?php
            }
            ?>
            </select>
    <?php
    }
    
    // liste des modifications possibles
     function liste_modif_film(){ ?>
          Choisissez la modification que vous voulez effectuer puis cliquez sur "valider"
        <form method ="post">        
            <select name="modif" id="function-select-modif-film">
                <option value="">--Please choose an option--</option>
                <option value="1">Modifier le titre</option>
                <option value="2">Modifier l'episode</option>
                <option value="3">Modifier le synopsis</option>
            </select>
            <hr>
            <button type="submit" name="valider1"  class="btn btn-primary">Valider</button>
        </form>
     <?php   
     }
     

     function recup_option(){
        liste_modif_film();  
            extract($_POST);
            
            
                
                if($_POST['modif']== 1){
                //    Modifier le titre
                echo $_POST['modif'];
                ?>
                    <form method="post" novalidate>
                        <!-- <? list_deroulante(); ?> -->
                        <div class="form-group">
                                <label id="ltitle">Entrer le nouveau titre du film</label>
                                <input  placeholder="Titre du film" name ="ititle" class="form-control" id="ititle" >
                        </div>
                        <button type="submit" name="valider2"  class="btn btn-primary">Valider</button>
                    </form>
                <?php
                modif('film',$_POST['ititle'],'title',$_POST['film']);
                }elseif($_POST['modif']== 2){
                    // Modifier l'episode
                    echo $_POST['modif'];
                     ?>
                    <form method="post" novalidate>
                        <div class="form-group">
                            <label id="lepisode">Entrer l'episode du film</label>
                            <input  placeholder="Episode film" name ="iepisode" class="form-control" id="iepisode" >
                        </div>
                        <button type="submit" name="valider2"  class="btn btn-primary">Valider</button>
                    </form>
                <?php
                modif('film',$_POST['iepisode'],'episode',$_POST['film']);
                }elseif($_POST['modif'] == 3){
                    // Modifier le synopsis 
                    echo $_POST['modif'];
                    ?>
                   <form method="post" novalidate>
                        <div class="form-group">
                            <label id="lsynopsis">Entrer le synopsis du film</label>
                            <input  placeholder="Synopsis" name ="isynopsis" class="form-control" id="isynopsis" >
                        </div>
                        <button type="submit" name="valider2"  class="btn btn-primary">Valider</button>
                    </form>
                <?php

                }
                elseif(!isset($_POST['modif'])){
                    echo "vide";
                }
                else{
                    echo $_POST['modif'];
                }
            

        
        
         
     }
    
     // fonction générale pour modifier une information

     function modif($table,$info,$col,$id){
        include 'startup.php';
        if (isset($_POST['valider2'])){
            extract($_POST);
            $query = "UPDATE $table SET $col = ? WHERE id = ? ";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param('ss',$info,$id);
            if($stmt->execute()){
                reussite('Validé');
                $stmt->close();
            }
           
        }
     }
    //récupère le formulaire des modifications films correspondant
    function recup_film(){
        if (isset($_POST['valider'])){
            extract($_POST);
            if(!empty($_POST['fonction'])){
                if($_POST['fonction']== 1){
                    ajouter_film();
                    form_add();
                }elseif($_POST['fonction']== 2){
                    supprimer_film();
                    list_supp();
                }elseif($_POST['fonction'] == 3){
                    recup_option();
                    
                    
                }
            }
        }else{

        }
    }
    ?>


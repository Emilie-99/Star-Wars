<?php
  session_start();
  include 'startup.php';
  $page_title = "Le monde de la force - inscription";
  $no_header = true;
  include 'includes/before_content.php';
//   if(isset($_SESSION['connecte'])){      //isset vérifie que la variable session est définie
//       header("Location: startwars.php");
//   }
  
      
  if (isset($_POST['inscription'])){
        extract($_POST);
        if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['confmdp'])){
     
     

            //nettoyage des données 
            $pseudo = htmlspecialchars($pseudo);
            $mail = htmlspecialchars($mail);
            // cryptage du mot de passe 
            $mdpcrypt = md5($_POST['mdp']); 
            $confmdp = md5($_POST['confmdp']);

             //vérification 
            $pseudolenght = strlen($pseudo);
            if($pseudolenght <= 255){

                
                    $query = "SELECT pseudo FROM user WHERE pseudo = ?";
                    // prepare query statement
                    $stmt = $mysqli->prepare($query);
                    $stmt->bind_param('s', $pseudo);
                    // execute query
                    $stmt->execute();
                    $stmt->store_result();
                    
                    if ($stmt->num_rows === 0) {

                        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
                            // recherche si le mail n'existe pas déjà dans la base de données
                            $query = "SELECT mail FROM user WHERE mail = ?";
                            $stmt = $mysqli->prepare($query);
                            $stmt->bind_param('s', $mail);
                            // execute query
                            $stmt->execute();
                            $stmt->store_result();
                            
                            if ($stmt->num_rows === 0) {

                                if($mdpcrypt == $confmdp){
                                    
                                    $query = "INSERT INTO user (pseudo, mail, mdp) VALUES ( ?, ?, ?)";
                                    // prepare query statement
                                                $stmt = $mysqli->prepare($query);
                                                $stmt->bind_param('sss', $pseudo,$mail,$mdpcrypt);
        
                                                
                                    // execute query
                                    if ($stmt->execute()){
                                        ?>
                                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Vous avez été inscrit avec succès 
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <?php
                                    $stmt->store_result();
                                    }
            
                                }
                                else{
                                    ?> 
                                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                             Vos deux mots de passe de correspondent pas
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    
                                   
                                    <?php
                                }
                            } else {
                                ?>  
                                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Cet email existe déjà! Renseignez-en un autre
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                
                                   
                                 
                                <?php
                            }

                        }
                        else{?>
                                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                       Votre e-mail n'est pas valide
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                
                            <?php
                        }
                            
                        
                    } else { 
                        ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                             Ce pseudo existe déjà! Choississez-en un nouveau
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                          
                        
                        <?php 
                    }
                    $stmt->close();

            }
            
            else{ ?>
                 
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Votre pseudo ne doit pas dépasser 255 caractères
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }
            
        
        } 

            else { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Tous les champs doivent être remplis
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                  
                
             <?php
            }
    }
      ?>   
            <!-- fin de la methode post -->
            <div class = 'connexion'>
            <h3 class="title">Inscription</h3>
            <form method="post" novalidate>
                    <div class="form-group">
                    <label id="pseudo" for="exampleInputEmail1">Pseudo</label>
                    <input placeholder="Pseudo" name ="pseudo" class="form-control" id="pseudo" aria-describedby="emailHelp">
                
                    </div>
                    <div class="form-group">
                        <label id="mail" for="exampleInputEmail1">E-mail</label>
                        <input placeholder="E-mail" name ="mail" class="form-control" id="mail" aria-describedby="emailHelp">
                    
                    </div>
                <div class="form-group">
                    <label id="mdp" for="exampleInputPassword1">Mot de passe</label>
                    <input type="password"  placeholder="Votre mot de passe" name="mdp" class="form-control" id="mdp">
                </div>

                
                <div class="form-group">
                    <label id="mdp" for="exampleInputPassword1">Confirmation mot de passe</label>
                    <input type="password"  placeholder="Confirmer le mot de passe" name="confmdp" class="form-control" id="confmdp">
                </div>
  
                 <button type="submit" name="inscription"  class="btn btn-primary">Valider</button>
            </form>

            </div>
                          
            
            
        <?php include 'includes/after_content.php'; ?>
<?php
ob_start();
  session_start();
  include 'startup.php';
  $page_title = "Le monde de la force - connexion";
  $no_header = true;
  include 'includes/before_content.php';

  
  if (isset($_POST['connexion'])){
    extract($_POST);
    if(!empty($_POST['identifiant']) && !empty($_POST['mdp'])){
      $identifiant = htmlspecialchars($identifiant);
      $mdp = md5($_POST['mdp']);
      if(filter_var($identifiant,FILTER_VALIDATE_EMAIL)){
        $query = "SELECT pseudo FROM user WHERE mail = ? AND mdp = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('ss',$identifiant,$mdp);
        // execute query
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows === 1){ 
            $query_recup = "SELECT pseudo FROM user WHERE mail = ?";
            $stmt_recup = $mysqli->prepare($query_recup);
            $stmt_recup->bind_param('s',$identifiant);
             // execute query
            $stmt_recup->execute();
            $res=$stmt_recup->get_result();
            $result_recup=$res -> fetch_array();
            $_SESSION['user']= $result_recup['pseudo'] ;
            
          ?>
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Vous êtes connecté 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
              </div>
             
             <?php
             header('Location:./index.php');
             die();
            $stmt_recup->close();  
        }
        else{?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Compte introuvable, vérifiez vos identifiants
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
          
          <?php
        }

        $stmt->close();
      }else{
        $query = "SELECT * FROM user WHERE pseudo = ? AND mdp = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('ss',$identifiant,$mdp);
        // execute query
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows === 1) {
            //  on connecte l'utilisateur
           
            $_SESSION['user']= $identifiant ;
          ?>
            
            
          <?php
           header('Location:../index.php?user='.$_SESSION['user']);
           die();
            
            
        }
        else{?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Compte introuvable,vérifiez vos identifiants
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
          
          <?php

        }

        $stmt->close();
      }
      
    }else{?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Tous les champs doivent être remplis
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
      </div><?php

    }
  }
  

    
?>
   
    
    
    <div class = 'connexion'>
        <h3 class="title">Connexion</h3>
      <form method="post" novalidate>
  <div class="form-group">
    <label id="identifiant" for="exampleInputEmail1">Identifiant</label>
    <input  placeholder="Pseudo ou E-mail" name ="identifiant" class="form-control" id="identifiant" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label id="mdp" for="exampleInputPassword1">Mot de passe</label>
    <input type="password"  placeholder="Votre mot de passe" name="mdp" class="form-control" id="mdp">
  </div>
  
  <button type="submit" name="connexion"  class="btn btn-primary">Valider</button>
</form>

      </div>
<?php include 'includes/after_content.php'; ?>

      

     
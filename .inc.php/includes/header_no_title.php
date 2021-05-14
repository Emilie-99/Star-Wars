<?php 
require  './includes/auth.php';
if(is_connected()){
?>

<div class="container head">
<div class="row header">

  <div class="col-2">
  
  <div class="nav flex-column nav-pills" id="navid" role="tablist" aria-orientation="vertical">
      <a <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?> href="../index.php" >Accueil</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/films.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?> href="../Code/films.php" >Films</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/personnages.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/personnages.php">Personnages</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/planet.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/planet.php" >Planètes</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/starship.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/starship.php" >Vaisseaux</a>
      <?php if($_SESSION['user'] == 'admin'){?>
          <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/modification.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/modification.php">Apporter des modifications</a>
      <?php}
      else{?>
    <?php }?>
  </div>


  </div>

<?php
}else{
?>
 <div class="container head">
 <div class="row header">

  <div class="col-2">
  
   <div class="nav flex-column nav-pills" id="navid" role="tablist" aria-orientation="vertical">
      <a <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?> href="../index.php" >Accueil</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/Sinscrire.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/Sinscrire.php">S'inscrire</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/connexion.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/connexion.php" class="nav nav-link" >Se connecter</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/films.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?> href="../Code/films.php" >Films</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/personnages.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/personnages.php">Personnages</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/planet.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/planet.php" >Planètes</a>
      <a <?php if($_SERVER['SCRIPT_NAME']=="/Code/starship.php") { ?>  class="nav nav-link active"  <?php   } else{ ?> class="nav nav-link"<?php } ?>href="../Code/starship.php" >Vaisseaux</a>
    </div>


  </div>










<?php
}

?>
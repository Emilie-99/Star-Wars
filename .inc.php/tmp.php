<!-- menu déroulant -->

<label id="page">Sélectionner la page que vous souhaitez modifier:</label>
             <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>


 <!-- onglet menu                -->
                <ul class="nav nav-pills mb-3 tabs" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Ajouter</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Modifier</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Supprimer</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Modifier</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Supprimer</div>
</div>
            </div>

<!-- menu deroulant indente -->
                        <div class="form-group">
                            <label id="identifiant" for="exampleInputEmail1">Sélectionner l'action que vous souhaitez réaliser : </label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    --
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="modification.php">Ajouter un film</a>
                                    <a class="dropdown-item" href="#">Supprimer un film</a>
                                    <a class="dropdown-item" href="#">Modifier des informations sur un film</a>
                                </div>
                            </div>
                        
                        </div>

<!-- menu déroulant avc formulaire  -->
                        <div class="form-group">
                            <label id="identifiant" for="exampleInputEmail1">Sélectionner l'action que vous souhaitez réaliser : </label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    --
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="modification.php?function=1">Ajouter un film</a>
                                    <a class="dropdown-item" href="modification.php?function=2">Supprimer un film</a>
                                    <a class="dropdown-item" href="modification.php?function=3">Modifier des informations sur un film</a>
                                </div>
                            </div>
                        
                        </div>
                        <?php
                            if($_GET['function'] == 1){
                            creer_form_film();
                            ajouter_film();
                        }

                        
                        ?>       


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
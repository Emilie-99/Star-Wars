<?php 
    require './fonction/fonction_administrateur.php';
    
    include 'startup.php';
    $page_title = "Le monde de la force - modifications";
    $no_header = true;
    
    
    include 'includes/before_content.php';
    
    ?>
    <script>
  $(document).ready(function() {
    $(".nav-item").click(function(event){
        console.log(event)
    $('.nav .nav-link').removeClass('active');
    $(event.target).addClass("active");
    console.log(event)
    $('.tab-pane').removeClass('show active');
    $("#"+event.target.href.split("#")[1]).addClass("show active");
    
    

    })

    function showform()
{

var obj2= document.getElementById("function-select");
console.log(obj2);
}
      
});
</script>
    <div class = 'modifications'>
        <h3 class="title">Apporter des modifications</h3>
       
           <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a   class="nav nav-link active" aria-selected="false"  class="nav nav-link"  id="pills-films-tab" data-toggle="pill" href="#pills-films" role="tab" aria-controls="pills-home" >Films</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a   class="nav nav-link" aria-selected="true"  class="nav nav-link"  id="pills-personnages-tab" data-toggle="pill" href="#pills-personnages" role="tab" aria-controls="pills-profile" >Personnages</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a   class="nav nav-link"  aria-selected="false" class="nav nav-link"  id="pills-planetes-tab" data-toggle="pill" href="#pills-planetes" role="tab" aria-controls="pills-contact" >Planètes</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a   class="nav nav-link"  aria-selected="false" class="nav nav-link"  id="pills-vaisseaux-tab" data-toggle="pill" href="#pills-vaisseaux" role="tab" aria-controls="pills-contact" >Vaisseaux</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-films" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form method ="post">        
                            <select name="fonction" id="function-select" onchange="showform()">
                                <option value="">--Please choose an option--</option>
                                <option value="1">Ajouter un film</option>
                                <option value="2">Supprimer un film</option>
                                <option value="3">Modifier un film</option>
        
                            </select>
                            <hr>
                           <button type="submit" name="valider"  class="btn btn-primary">Valider</button>
                           
                
                    </form>
                    <?php
                    ajouter_film();
                    form_add();
                   ?>           
                </div>
                <div class="tab-pane fade" id="pills-personnages" role="tabpanel" aria-labelledby="pills-profile-tab">
                </div>
                <div class="tab-pane fade" id="pills-planetes" role="tabpanel" aria-labelledby="pills-contact-tab">BLBLUBLU</div>
                <div class="tab-pane fade" id="pills-vaisseaux" role="tabpanel" aria-labelledby="pills-contact-tab">BL</div>
            </div>
           

        

    </div>
<?php include 'includes/after_content.php'; ?>

    <script>
  $(document).ready(function() {
    $(".nav-item").click(function(event){
        console.log(event)
    $('.nav .nav-link').removeClass('active');
    $(event.target).addClass("active");
    console.log(event)
    $('.tab-pane').removeClass('show active');
    $("#"+event.target.href.split("#")[1]).addClass("show active");
    
    

    })


      
});

function showform()
{

var obj2= document.getElementById("function-select");
if(obj2.value==1)
{
    document.getElementById("addform").style.cssText = 'display:block !important';
    console.log(obj2.value);
}
else{
    document.getElementById("addform").style.cssText = 'none !important';
    console.log("NO");
}

}
</script>

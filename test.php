<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le monde de la force</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

    <script src="./js/bootstrap.min.js"></script>
    
    
    
</head>

<body>
<?php
include 'startup.php';
            $res = $mysqli->query("SELECT ID,TITLE FROM FILM");?>
            <select name="film" id="function-select">
            <?php
            while ($film = $res-> fetch_assoc()){?>
                        
                            
                            <option value="<?php $film['id'] ?>"><?php $film['title'] ?></option>       
                           
                            <hr>
                            
                   

            <?php
            }
            ?>
            </select>
            <button type="submit" name="valider"  class="btn btn-primary">Valider</button>

</body>

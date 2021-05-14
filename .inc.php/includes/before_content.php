<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($page_description)) { ?>
    <meta name="description" content="<?= $page_description ?>">
    <?php } ?>
    <title><?= (isset($page_title) ? $page_title : 'Le monde de la force' ) ?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../Code/style.css">
    <script src="../bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src ='../bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.min.js'></script>
</head>
<?php
if (!isset($no_header) || $no_header != true) {
     include 'header.php';?>

     <body class ='blue_vador'>
<?php }
else{
    include 'header_no_title.php';?>
    <body class = 'the_force'>
    <?php
}
?>





<div class="content">
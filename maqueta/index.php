<?php require_once("header.php"); ?>
<?php if(isset($_GET['sec']) && $_GET['sec'] != '') { ?>
        
        <?php require_once 'page-templates/' . $_GET['sec'] . '.php'; ?>
<?php } else { ?>
        <?php require_once 'page-templates/inicio.php'; ?>
<?php } ?>
<?php require_once("footer.php"); ?>
<?php
    include_once('global/global.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Contacto - Más ventas con LinkedIn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo AUTHOR?>" name="author">
    <meta content="<?php echo KEYWORDS?>" name="keywords">
    <meta content="<?php echo DESCRIPTION?>" name="description">

    <!-- Favicon 
    <link href="<?php echo URL?>images/favicon.ico" rel="icon"> -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL?>assets/css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->


</head>


<body>
    <?php
    $identificador =  getenv('HTTP_USER_AGENT');
    if(preg_match("/Edg/i",$identificador)){
    require_once('views/nav.php');
    require_once ('views/contact.php');
    require_once('views/footer.php');
    }
    elseif(preg_match("/Chrome/i",$identificador)){
        require_once('view/nav.php');
        require_once ('view/contact.php');
        require_once('view/footer.php');
     }else{
        require_once('view/nav.php');
        require_once ('view/contact.php');
        require_once('view/footer.php');
     }

    ?>

    <!-- JavaScript Libraries -->
    <script src="<?php echo URL?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
 

</body>

</html>
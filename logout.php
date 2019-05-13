<?php include "includes/header.php";?> 
<?php include "includes/navigation.php";?>



<?php 
    $_SESSION[logedin] = null;
    header("Location : explore.php");
?>
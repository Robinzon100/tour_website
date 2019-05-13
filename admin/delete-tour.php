
<?php
include "../includes/db.php";

function escape($string){
    global $connection;
    return mysqli_real_escape_string($connection,trim($string));
}



if (isset($_POST['delete_tour'])) {
 
   $find_title = escape($_POST['find_title']);
  

   
   $query = "DELETE FROM tours WHERE tour_title = '$find_title'";
   $post_query = mysqli_query($connection,$query);
   $the_post_id = mysqli_insert_id($connection);


   header('Location: ../explore.php');


   if (!$post_query) {
      die("error.".mysqli_error($connection));
   }
}



?>

<form action="" method="POST" enctype="multipart/form-data">
        <label for="find_title">tour Title that you want to delete</label>
        <input type="text" name="find_title">


        <input type="submit" name="delete_tour" value="delete Tour">

</form>
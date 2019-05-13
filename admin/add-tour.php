
<?php
include "../includes/db.php";
function escape($string){
    global $connection;
    return mysqli_real_escape_string($connection,trim($string));
}



if (isset($_POST['create_tour'])) {
   $tour_title = escape($_POST['title']);
   $tour_description = escape($_POST['description']);
   $tour_cost = escape($_POST['cost']);

   $tour_image = $_FILES['image']['name'];
   $tour_image_temp = $_FILES['image']['tmp_name'];

   $tour_date = date('d-m-y');

   move_uploaded_file($tour_image_temp,"images/".$tour_image);

   $query = "INSERT INTO tours(tour_title,tour_date,tour_image,tour_description) ";
   $query.="VALUES('$tour_title',now(),'$tour_image','$tour_description') ";
   $post_query = mysqli_query($connection,$query);
   $the_post_id = mysqli_insert_id($connection);
   header('Location: ../explore.php');


   if (!$post_query) {
      die("error.".mysqli_error($connection));
   }
}



?>

<form action="" method="POST" enctype="multipart/form-data">
     
        <label for="title">tour Title</label>
        <input type="text" name="title">
        
        <label for="description">tour description</label>
        <textarea name="description" cols="30" rows="10" id="body"></textarea>

        <label for="title">tour const</label>
        <input type="text" name="cost">

        <label for="image">tour Image</label>
        <input type="file" name="image" >

        
        <input type="submit" name="create_tour" value="Publish Tour">

</form>
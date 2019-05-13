<?php include "includes/header.php";?> 
<?php include "includes/navigation.php";?>
<?php include "functions.php";?>

</style>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<?php 
    if (isset($_POST['create_user'])) {
        $username = escape($_POST['username']);
        $mail = escape($_POST['mail']);
        $password = escape($_POST['password']);
        $date = date('d-m-y');
     
        
     
        $query = "INSERT INTO users(username, mail, password, date) ";
        $query .="VALUES('$username', '$mail', '$password', now()) ";
        $user_query = mysqli_query($connection,$query);
        $user_id = mysqli_insert_id($connection);
        
        $_SESSION['logedin'] = true;


        header('Location: explore.php');


     
        if (!$user_query) {
           die("error.".mysqli_error($connection));
        }
     }
?>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="card bg-light text-center" style="transform: scale(1.2)">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	 
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="mail" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password"class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
                                    
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="create_user"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

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
    if (isset($_POST['login_user'])) {
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            echo "<h1>".$error."</h1>";
        }


        $mail = escape($_POST['mail']);
        $password = escape($_POST['password']);
     
     
        $query = "SELECT * FROM users WHERE  password = $password AND mail = $mail";
        $user_query = mysqli_query($connection,$query);
        $users = mysqli_fetch_assoc(user_query);
        

        if (users == null) {
            header("Location: login.php?error=not found");
        }else{
            $_SESSION['logedin'] = true;
            header('Location: explore.php');
        }
        
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
	 
	<form action="" method="post">
	 
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
        <button type="submit" class="btn btn-primary btn-block" name="login_user"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

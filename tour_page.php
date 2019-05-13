<?php include "includes/header.php";?> 
<?php include "includes/navigation.php";?>
<?php include "functions.php";?>

<?php
        if(isset($_GET['tourid'])){
            $tourid = $_GET['tourid'];
        
        $qury = "SELECT * FROM tours WHERE tour_id = $tourid";
        $result_tour =mysqli_query($connection,$qury);

        

        while($row = mysqli_fetch_assoc($result_tour)){
			$tour_id = $row['tour_id'];
			$tour_title = $row['tour_title'];
			$tour_description = $row['tour_description'];
			$tour_cost = $row['cost'];
			$tour_image = $row['tour_image'];
			$tour_date = $row['tour_date']; 
		?>
		
			 <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
			<div class="card-small glide__slide">
				<a href="explore.php?tourid = <?= $tour_id?> ">
					<div class="card-small__image" style="background-image: url('admin/images/<?=  $tour_image ?> ')"></div>
				</a>
				<a href="explore.php?tourid = <?= $tour_id?> " class="card-small__text">
					<h2 class="card-small__text__title"> <?= $tour_title ?>  </h2>
					<p class="card-small__text__price"> <?=$tour_cost?>$</p>
					<div class="card-small__text__description"> <?= $tour_description ?></div>
					<p class="card-small__text__views"> <?= $tour_date?> </p>
					<div class="card-small__text__rating">
						 
						<img class="card-small__text__rating__star" src="./img/SVG/star.svg" alt="">
						 
					</div>

					<p href="#" class="card-small__text__location"><img src="img/SVG/SVG/ratting.svg" alt="">tbilisi</p>

				</a>
            </div>
            
<?php 
	}}
?>
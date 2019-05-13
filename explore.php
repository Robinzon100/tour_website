<?php include "includes/header.php";?> 
<?php include "includes/navigation.php";?>


<div class="medium-card-container glide" id="medium-card-container-tours">
	<h1 class="underline-headings medium-card-container__title"><a class="link-thin-arrow " href=""> TOURS </a></h1>
	<div class="glide__arrows medium-card-container__buttons" data-glide-el="controls">
		<button class="glide__arrow glide__arrow--left medium-card-container__buttons__left"
			data-glide-dir="<">prev</button>
		<button class="glide__arrow glide__arrow--right medium-card-container__buttons__right"
			data-glide-dir=">">next</button>
	</div>

	<div class="glide__track" data-glide-el="track">
		<div class="glide__slides">

		<?php 
			$query = "SELECT * FROM tours";
			$result_tour = mysqli_query($connection,$query);
			$count = mysqli_num_rows($result_tour);
			if($count<1){
				echo "<h1>No Post</h1>";
			}else{
	
	while($row = mysqli_fetch_assoc($result_tour)){
			$tour_id = $row['tour_id'];
			$tour_title = $row['tour_title'];
			$tour_description = $row['tour_description'];
			$tour_cost = $row['cost'];
			$tour_image = $row['tour_image'];
			$tour_date = $row['tour_date']; 
		?>
		
			 
			<div class="card-small glide__slide">
				<a href="tour_page.php?tourid=<?= $tour_id?> ">
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

		</div>
	</div>
</div>








<!-- 
<div class="large-card-container glide" id="large-card-container-specialOffers">
	<h1 class="underline-headings large-card-container__title"><a class="link-thin-arrow" href=""> SPECIALS</a></h1>
	<div class="glide__arrows large-card-container__buttons" data-glide-el="controls">
		<button class="glide__arrow glide__arrow--left large-card-container__buttons__left"
			data-glide-dir="<">prev</button>
		<button class="glide__arrow glide__arrow--right large-card-container__buttons__right"
			data-glide-dir=">">next</button>
	</div>

	<div class="glide__track" data-glide-el="track">
		<div class="glide__slides">
			 
			<div class="card-large glide__slide">
				<a href="tours/ tour._id ">
					<div class="card-large__image" style="background-image: url( tour.image )"></div>
				</a>
				<a href="tours/ tour._id " class="card-large__text">
					<h2 class="card-large__text__title">  tour.title  </h2>
					<p class="card-large__text__price">  tour.price  $</p>
					<div class="card-large__text__description">  tour.description  </div>
					<p class="card-large__text__views"> <span>👁</span> 120</p>
					<div class="card-large__text__rating">
						 
						<img class="card-large__text__rating__star" src="img/SVG/star.svg" alt="">
						 
					</div>

					<p href="#" class="card-large__text__location"><img src="img/SVG/SVG/ratting.svg" alt="">tbilisi</p>

				</a>
            </div>

            <div class="card-large glide__slide">
				<a href="tours/ tour._id ">
					<div class="card-large__image" style="background-image: url( tour.image )"></div>
				</a>
				<a href="tours/ tour._id " class="card-large__text">
					<h2 class="card-large__text__title">  tour.title  </h2>
					<p class="card-large__text__price">  tour.price  $</p>
					<div class="card-large__text__description">  tour.description  </div>
					<p class="card-large__text__views"> <span>👁</span> 120</p>
					<div class="card-large__text__rating">
						 
						<img class="card-large__text__rating__star" src="img/SVG/star.svg" alt="">
						 
					</div>

					<p href="#" class="card-large__text__location"><img src="img/SVG/SVG/ratting.svg" alt="">tbilisi</p>

				</a>
            </div>
            
            <div class="card-large glide__slide">
				<a href="tours/ tour._id ">
					<div class="card-large__image" style="background-image: url( tour.image )"></div>
				</a>
				<a href="tours/ tour._id " class="card-large__text">
					<h2 class="card-large__text__title">  tour.title  </h2>
					<p class="card-large__text__price">  tour.price  $</p>
					<div class="card-large__text__description">  tour.description  </div>
					<p class="card-large__text__views"> <span>👁</span> 120</p>
					<div class="card-large__text__rating">
						 
						<img class="card-large__text__rating__star" src="img/SVG/star.svg" alt="">
						 
					</div>

					<p href="#" class="card-large__text__location"><img src="img/SVG/SVG/ratting.svg" alt="">tbilisi</p>

				</a>
			</div>
			 
		</div>
	</div>
</div> -->





<script src="js libraries/glide.min.js"></script>
<script src="js libraries/Glidejs_sliders.js"></script>

<?php include "includes/bottom.php";?>

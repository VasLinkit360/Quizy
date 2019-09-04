<?php include('inc_head.php'); ?>
<!--<link href="css/add.css" rel="stylesheet">-->
</head>
<body>
	  <div id="loader"><div id="spin"></div></div>
	  
	  <div class="page bgImg">
	  		<div id="toolbar" class="bluedark toporange botorange">
				<div class="open-left">
				  <a href="reward.php" class="link back">
					<ion-icon class="ion-menu" name="arrow-back"></ion-icon>
				  </a>
				</div>
				<div class="logo m-0 text-center">
					<a href="index.php"><img src="img/logo.png" height="42" alt=""/> </a>
				</div>
				<div class="open-right" data-activates="slide-out-right">
					<a href="search.php"seach class="ion-head"><ion-icon name="search"></ion-icon> </a>
				</div>
			</div>
	  <div class="clearfix"></div>
	  
	  <?php include('inc_leftmenu.php'); ?>
	  
	  <div class="page-content">
		  	
		  <div class="block pd-0">
				<div class="columns slide-show2 pt-15">
					<div class="column col-12 col-xs-12">					    		
						<div class="owl-carousel owl-theme">
							<div class="item">
								<a href="article.html">
									<img src="img/game-reward/1b.jpg" alt="">
								</a>
							</div>

						</div>

					</div>
				</div>
			  	<div class="columns">
					<div class="column col-xs-8">
					   <h4 class="mt-0">Cashback Toped Steam Wallet 15%</h4>
					   <div class="info-game-rating">
						  <span class="info-game-rating">
						  <i class="icon icon-star fill"></i>
						  <i class="icon icon-star fill"></i>
						  <i class="icon icon-star fill"></i>
						  <i class="icon icon-star fill"></i>
						  <i class="icon icon-star"></i>
						  </span>
					   </div>
					</div>
					<div class="column col-xs-4">
					   <p class="price">Tukarkan!</p>
						<p class="text-right" style="margin-right: 25px"><strong>30 Coin</strong></p>
					</div>
				 </div>
			  	<div class="liner"></div>
			  	<div class="columns m-5">
                        <div class="column col-xs-12">
                           <p class="mt-0 new-title">Tentang</p>
                           <p>
                              Nikmati voucher cashback Steam Wallet 15% dengan maksimal cashback Rp 20.000 ke TokoCash. 
                           </p>
						   <p class="mt-0 new-title">Ikuti langkah ini untuk menikmati reward Anda:</p>
                           <p>
							   Akses button chat dikanan bawah, untuk menukarkan reward.
                           </p>
                        </div>
                     </div>
		  </div>
		  	
				
      </div>
			
		  
	  </div>
	
<?php include('inc_footer.php'); ?>
<script src="js/owl.carousel.min.js"></script>
<script>
	$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:false,
		    items:1
		});

	$('.owl-carousel2').owlCarousel({
		loop:true,
		margin:10,
		nav:false,
		dots:false,
		items:3
	});
</script>
<script>
	$(document).ready(function() {
		$(".btn-pref .btn").click(function () {
			$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
			// $(".tab").addClass("active"); // instead of this do the below 
			$(this).removeClass("btn-default").addClass("btn-primary");   
		});
	});
</script>
</body>
</html>
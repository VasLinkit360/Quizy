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
			  	<div class="pd-10">

					<div class="pd-5">
						  <div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
							  	<div class="columns">
									<div class="column col-12 col-xs-12 pd-0">
										<div class="columns">
											<div class="col-xs-7 pd-0">
												<p><strong>Redeem your reward</strong></p>
											</div>
											<div class="col-xs-5 pd-0">
												&nbsp;
											</div>
										</div>
										<div class="owl-carousel2 owl-theme slider-popular">
											<div class="item">
												<a href="reward-detail.php">
													<img src="img/game-reward/1.jpg">
												</a>
												<p class="title">Cashback Toped... </p>
												<p class="price">30 coin</p>
											</div>
											<div class="item">
												<a href="detail-reward.html">
													<img src="img/game-reward/2.jpg">
												</a>
												<p class="title">Klikfilm (1 hari... </p>
												<p class="price">750 coin</p>
											</div>
											<div class="item">
												<a href="detail-reward.html">
													<img src="img/game-reward/3.jpg">
												</a>
												<p class="title">TriXogo Games... </p>
												<p class="price">1200 coin</p>
											</div>								    
										</div>
									</div>
									
									<div class="column col-12 col-xs-12 pd-0">
										<div class="columns">
											<div class="col-xs-7 pd-0">
												<p><strong>Top Reward</strong></p>
											</div>
											<div class="col-xs-5 pd-0">
												&nbsp;
											</div>
										</div>
										<div class="owl-carousel2 owl-theme slider-popular">
											<div class="item">
												<a href="reward-detail.php">
													<img src="img/game-reward/3.jpg">
												</a>
												<p class="title">TriXogo Games... </p>
												<p class="price">1200 coin</p>
											</div>
											<div class="item">
												<a href="detail-reward.html">
													<img src="img/game-reward/1.jpg">
												</a>
												<p class="title">Cashback Toped... </p>
												<p class="price">30 coin</p>
											</div>
											<div class="item">
												<a href="detail-reward.html">
													<img src="img/game-reward/2.jpg">
												</a>
												<p class="title">Klikfilm (1 hari... </p>
												<p class="price">750 coin</p>
											</div>			    
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade in" id="tab2">
							  	
							</div>
						  </div>
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
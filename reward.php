<?php include('inc_head.php'); ?>
<!--<link href="css/add.css" rel="stylesheet">-->
</head>
<body>
	  <div id="loader"><div id="spin"></div></div>
	  
	  <div class="page bgImg">
	  <?php include('inc_topmenu.php'); ?>
	  <div class="clearfix"></div>
	  
	  <?php include('inc_leftmenu.php'); ?>
	  
	  <div class="page-content">

			<div class="columns slide-show2">
				<div class="column col-12 col-xs-12 pd-0">					    		
					<div class="owl-carousel owl-theme">
						<div class="item">
							<a href="detail.php">
								<img src="img/slideshow4.png">
							</a>
						</div>
						<div class="item">
							<a href="detail.php">
								<img src="img/slideshow5.png">
							</a>
						</div>
						<div class="item">
							<a href="detail.php">
								<img src="img/slideshow6.png">
							</a>
						</div>								    
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		  	
		  <div class="block pd-0">
			  	<div class="pd-10">
					
					<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
						<div class="btn-group" role="group">
							<button type="button" id="stars" class="btn bg-3" href="#tab1" data-toggle="tab">
								Reward
							</button>
						</div>
						<div class="btn-group" role="group">
							<button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
								My Reward
							</button>
						</div>
					</div>

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
												<a href="reward-all.php" class="pull-right text-small">Lebih Lengkap</a>
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
												<a href="reward-detail.php">
													<img src="img/game-reward/2.jpg">
												</a>
												<p class="title">Klikfilm (1 hari... </p>
												<p class="price">750 coin</p>
											</div>
											<div class="item">
												<a href="reward-detail.php">
													<img src="img/game-reward/3.jpg">
												</a>
												<p class="title">TriXogo Games... </p>
												<p class="price">1200 coin</p>
											</div>								    
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade in" id="tab2">
							  	<p> - Kosong -</p>
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
			$(".btn-pref .btn").removeClass("bg-3").addClass("btn-default");
			// $(".tab").addClass("active"); // instead of this do the below 
			$(this).removeClass("btn-default").addClass("bg-3");   
		});
	});
</script>
</body>
</html>
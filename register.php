<?php include('inc_head.php'); ?>
<link href="css/card.css" rel="stylesheet">	  
  </head>
  <body>
	  <div id="loader"><div id="spin"></div></div>
  
	  <div class="page bgImg">
		  <div id="toolbar" class="bluedark toporange botorange">
			<div class="open-left">
			  <a href="index.php" class="link back">
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
	  
	  	<div class="page-content">
			<div class="block pt-45 m-20 no-bg">

				<div class="card card-signup">
				  <form class="form">
					<div class="header header-warning text-center">
					  <h4 class="card-title">Choose Your Purchase</h4>
					</div>
					<div class="col-xs-12">

						<a href="" class="btn-lrg bg-1">
							<div class="row">
								<div class="col-xs-1">
									●
								</div>
								<div class="col-xs-10">
									<p class="mb-0">Subscribe</p>
								</div>

								<div class="clearfix"></div>
							</div>
						</a>
						<a href="" class="btn-lrg bg-2 mt-10">
							<div class="row">
								<div class="col-xs-1">
									●
								</div>
								<div class="col-xs-10">
									<p class="mb-0">Buy One Time Only</p>
								</div>

								<div class="clearfix"></div>
							</div>
						</a>
					  	<a href="#!" class="btn btn-primary btn-round mt-15 wd100 mb-10">
							<p class="mb-0 fs-18">Sign In</p>
						</a>

					</div>
					
					  <p class="text-center text-red mt-10">Already have an account? <a href="login.php">Sign In</a>
					  </p>
				  </form>
				</div>

			</div>
			
      	</div>
		  
	  </div>

<?php include('inc_footer.php'); ?>
	  
  </body>
</html>

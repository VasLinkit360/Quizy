<?php include('inc_head.php'); ?>
<link href="css/card.css" rel="stylesheet">	  
  </head>
  <body>
	  <div id="loader"><div id="spin"></div></div>
  
	  <div class="page bgImg">
		  <div id="toolbar" class="bluedark toporange botorange">
			<div class="open-left">
			  <a href="login-after.php" class="link back">
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
			<div class="no-bg">
				<div class="row no-margin">
			    	<a href="category.php">
						<img src="img/lg1.jpg" alt=""/> 
					</a>
				</div>
				<div class="row no-margin">
					<a href="" data-toggle="modal" data-target="#myModal">
						<img src="img/lg2.jpg" alt=""/> 
					</a>
				</div>
				<div class="row no-margin">
					<a href="" data-toggle="modal" data-target="#myModal">
						<img src="img/lg3.jpg" alt=""/> 
					</a>
				</div>
		  </div>
			
      	</div>
		  
	  </div>
	  
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div style="margin-top: 20%;"></div>
	  <div class="card card-signup">
		  <form class="form">
			<div class="header header-warning text-center">
			  <h4 class="card-title">Choose Your Purchase</h4>
			</div>
			<div class="col-xs-12">
				<p class="text-center text-red mt-10">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<a href="" class="btn-lrg bg-1">
					<div class="row">
						<div class="col-xs-1">
							●
						</div>
						<div class="col-xs-10">
							<p class="mb-0">Mingguan</p>
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
							<p class="mb-0">Harian</p>
						</div>

						<div class="clearfix"></div>
					</div>
				</a>
				<a href="#!" class="btn btn-primary btn-round mt-15 wd100 mb-10"
					data-dismiss="modal">
					<p class="mb-0 fs-18">Batal</p>
				</a>
			</div>

		  </form>
		</div>

	</div>
</div>
<?php include('inc_footer.php'); ?>
	  
  </body>
</html>

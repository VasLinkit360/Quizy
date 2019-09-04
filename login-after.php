<?php include('inc_head.php'); ?>
<link href="css/card.css" rel="stylesheet">	  
  </head>
  <body>
	  <div id="loader"><div id="spin"></div></div>
  
	  <div class="page bgImg">
		  <div id="toolbar" class="bluedark toporange botorange">
			<div class="open-left">
			  <a href="login.php" class="link back">
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
	  
	  	<div class="page-content bg-b">
			<div class="block pt-45 m-20 no-bg">

				<div class="card card-signup">
				  	<div class="col-xs-12">
						<a href="login-after-choose.php" class="btn btn-success wd100 pd-15">
							<i class="fa fa-play"></i>&nbsp;&nbsp; Let's Play
						</a>
					</div>
					<div class="col-xs-12 mt-15">
						<a href="leaderboard-all.php" class="btn btn-primary wd100 pd-15">
							<i class="fa fa-sitemap"></i>&nbsp;&nbsp; Leaderboard
						</a>
					</div>
				</div>

			</div>
			
      	</div>
		  
	  </div>

<?php include('inc_footer.php'); ?>
	  
  </body>
</html>

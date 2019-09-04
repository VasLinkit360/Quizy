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
					  <h4 class="card-title">LOG IN</h4>
					  <div class="social-line">
						<a href="#!" class="btn btn-just-icon btn-simple">
						  <i class="fab fa-2x fa-facebook-square"></i>
						</a>
						<a href="#!" class="btn btn-just-icon btn-simple">
						  <i class="fab fa-2x fa-twitter-square"></i>
						</a>
						<a href="#!" class="btn btn-just-icon btn-simple">
						  <i class="fab fa-2x fa-google-plus-square"></i>
						</a>
					  </div>
					</div>
					<p class="description text-center">Or Be Classical</p>
					<div class="content">

					  <div class="input-group">
						<span class="input-group-addon">
							<ion-icon class="ion-login" name="call"></ion-icon>
						</span>
						<div class="form-group is-empty"><input type="text" class="form-control" placeholder="MSISDN..."><span class="material-input"></span></div>
					  </div>

					  <div class="input-group">
						<span class="input-group-addon">
						  <!--<i class="material-icons">lock_outline</i>-->
							<ion-icon class="ion-login" name="lock"></ion-icon>
						</span>
						<div class="form-group is-empty"><input type="password" placeholder="Password..." class="form-control"><span class="material-input"></span></div>
					  </div>

					</div>
					<div class="footer text-center mb-10">
					  <a href="#!" class="btn btn-primary btn-round">Get Started</a>
					</div>
					  <p class="text-center text-red">Don’t have an account? <a href="register.php">Register</a></p>
				  </form>
				</div>

			</div>
			
      	</div>
		  
	  </div>

<?php include('inc_footer.php'); ?>
	  
  </body>
</html>

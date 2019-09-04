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
	  
	  	<div class="page-content bg-a">
			<div class="block pt-45 m-20 no-bg">

				<div class="card card-signup">
				  <form class="form">
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
						<div class="">
							<div class="col-xs-6 mb-0" style="padding-left: 10px">
								<a href="register.php" class="btn btn-reg btn-round">Daftar</a>
							</div>
							<div class="col-xs-6 mb-0" style="padding-left: 5px">
								<a href="login-after.php" class="btn btn-primary btn-round">Masuk</a>
							</div>
						</div>
					</div>
				  </form>
				</div>

			</div>
			
      	</div>
		  
	  </div>

<?php include('inc_footer.php'); ?>
	  
  </body>
</html>

<?php include('inc_head.php'); ?>
	  
</head>
<body>
	  <div id="loader"><div id="spin"></div></div>
	  
	  <div class="page bgImg">
	  <?php include('inc_topmenu.php'); ?>
	  <div class="clearfix"></div>
	  
	  <?php include('inc_leftmenu.php'); ?>
	  
	  <div class="page-content">
		
		<div style="background: #eeeeee;height: 10px;margin-top: 1px;"></div>
		<div class="block-title">
			<h3>Profile</h3>
			<a href="profile-edit.php" class="button-edit">
				<i class="fa fa-edit"></i>
			</a>
		</div>
		<div class="block pd-15">
			<div class="set">
				<div class="set-img">
			    	<img src="img/acc-default.png" class="img-circle" alt=""/> 
				</div>
				<div class="set-bar">
					<div class="set-extra">
						<h5 class="desc1">Username: 
							<span>Luc</span>
						</h5>
					</div>
					<div class="set-extra">
						<h5 class="desc2">Msisdn: 
							<span>+62838 7094 9992</span>
						</h5>
					</div>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-xs-12 mt-20">
				<a href="" class="btn btn-primary btn-round bg-1 wd100">Unsubscribe</a>
			</div>
			<!--<div class="col-xs-6 mt-20">
				<a href="" class="btn btn-primary btn-round">Renewal</a>
			</div>-->
			<div class="clearfix"></div>
		</div>
		
		<div class="block-title">
			<h3>Quiz History</h3>
		</div>
		<div class="block pd-15">
			<div class="hstry1">
				<div class="col-xs-3">
			    	<img src="img/qz3.jpg" height="40px" alt=""/> 
				</div>
				<div class="col-xs-6 pd-0">
					<div class="text-hstry">Social Media</div>
				</div>
				<div class="col-xs-3">
					<div class="text-hstry pull-right">77%</div>
				</div>
			</div>
			<div class="hstry2">
				<div class="col-xs-3">
			    	<img src="img/qz2.jpg" height="40px" alt=""/> 
				</div>
				<div class="col-xs-6 pd-0">
					<div class="text-hstry">Gaming World Quiz</div>
				</div>
				<div class="col-xs-3">
					<div class="text-hstry pull-right">64%</div>
				</div>
			</div>
			<div class="hstry1">
				<div class="col-xs-3">
			    	<img src="img/qz4.jpg" height="40px" alt=""/> 
				</div>
				<div class="col-xs-6 pd-0">
					<div class="text-hstry">World Place to Visit</div>
				</div>
				<div class="col-xs-3">
					<div class="text-hstry pull-right">53%</div>
				</div>
			</div>
			<div class="hstry2">
				<div class="col-xs-3">
			    	<img src="img/qz1.jpg" height="40px" alt=""/> 
				</div>
				<div class="col-xs-6 pd-0">
					<div class="text-hstry">Bitcoin Quiz</div>
				</div>
				<div class="col-xs-3">
					<div class="text-hstry pull-right">9%</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
      </div>
			
		  
	  </div>
	
<?php include('inc_footer.php'); ?>
	  
</body>
</html>
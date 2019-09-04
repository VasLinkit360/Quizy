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
			<h3>Edit Profile</h3>
		</div>
		<div class="block pd-15">
			<div class="list-block">
			<ul>
				<li>
					<input type="text" name="name" class="form-control my-input" id="name" placeholder="Username">
				</li>
				<li class="text-center">
					<img src="img/acc-default.png" width="170px" alt="">
				</li>
				<li>
					<input type="file" name="pic" accept="image/*">
				</li>
			</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="block pd-15 text-center">
			<a href="profile.php" class="btn btn-primary btn-round">Submit</a>
		</div>
		
      </div>
			
		  
	  </div>
	
<?php include('inc_footer.php'); ?>
	  
</body>
</html>
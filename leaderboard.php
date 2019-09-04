<?php include('inc_head.php'); ?>
	  
</head>
<body>
	  <div id="loader"><div id="spin"></div></div>
	  
	  <div class="page bgImg">
	  <?php include('inc_topmenu.php'); ?>
	  <div class="clearfix"></div>
	  
	  <?php include('inc_leftmenu.php'); ?>
	  
	  <div class="page-content">
		
		<div class="block-title">
			<h3>Leaderboard</h3>
		</div>
		<!--<div class="block pd-15">
			<div class="quiz-info bg-brown mb-0">
				<h5>
					Quiz: Gaming World Quiz 
					<span class="pull-right">
						<div class="form-group">
						  <select class="form-control fix-form" id="date">
							<option>This Day</option>
							<option>This Week</option>
							<option>This Month</option>
							<option>All Time</option>
						  </select>
						</div>
					</span>
				</h5>
			</div>
		</div>-->
		<div class="block pd-15">
			<div class="leaderboard">
				<div class="row">
					<div class="col-xs-2">
						Rank
					</div>
					<div class="col-xs-6">
						Player
					</div>
					<div class="col-xs-4">
						Score
					</div>
				</div>
				<div class="table-responsive">          
					<table class="table v2">
						<tbody>
						  <tr>
							<td class="text-center">1</td>
							<td>
								<div class="set-img">
									<img src="img/acc-default.png" class="img-circle" alt=""> 
								</div>
								Tina Wood
							</td>
							<td>13.000</td>
						  </tr>
							<tr>
							<td class="text-center">2</td>
							<td>
								<div class="set-img">
									<img src="img/acc-default.png" class="img-circle" alt=""> 
								</div>
								Joe
							</td>
							<td>12.900</td>
						  </tr>
						  <tr>
							<td class="text-center">3</td>
							<td>
								<div class="set-img">
									<img src="img/acc-default.png" class="img-circle" alt=""> 
								</div>
								Tina Wood
							</td>
							<td>13.000</td>
						  </tr>
						  <tr>
							<td class="text-center">4</td>
							<td>
								<div class="set-img">
									<img src="img/acc-default.png" class="img-circle" alt=""> 
								</div>
								Yohanes
							</td>
							<td>1000</td>
						  </tr>
						  <tr>
							<td class="text-center">5</td>
							<td>
								<div class="set-img">
									<img src="img/acc-default.png" class="img-circle" alt=""> 
								</div>
								Samuel
							</td>
							<td>800</td>
						  </tr>
						</tbody>
					</table>
				</div>
				
				<!--<div class="text-center">
					<ul class="pagination pagination-large">
						<li class="disabled"><span>«</span></li>
						<li class="active"><span>1</span></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li><a href="">5</a></li>
						<li><a href="" rel="next">»</a></li>	
					</ul>
				</div>-->
				
			</div>
			<a href="login-after-choose.php" class="btn btn-primary btn-round wd100">Main Lagi</a>
			<a href="reward-all.php" class="btn btn-primary btn-reg wd100 mt-10">Hadiah</a>
		</div>
      </div>
			
		  
	  </div>
	
<?php include('inc_footer.php'); ?>

</body>
</html>
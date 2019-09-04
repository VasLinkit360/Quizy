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
			<h3>Quiz Play</h3>
		</div>
		<div class="block pd-15">
			<div class="quiz-head">
				<div class="" style="margin-top: 1px">
					<img src="img/qz5-b.jpg" alt=""> 
				</div>
			</div>
			<div class="quiz-q mt-10">
				<div class="col-xs-8 no-padding">
					<p>Identify this animal.</p>
				</div>
				<div class="col-xs-4">
					<div class="circle-gr"><strong class="time-number">52</strong></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="quiz-an">
				<div class="">
					<button tabindex="0" class="vix an1" type="button">
						<span class=""><strong>A.</strong>&nbsp;Phoenix</span>
						<span class=""></span>
					</button>
				</div>
				<div class="">
					<button tabindex="0" class="vix an2" type="button">
						<span class=""><strong>B.</strong>&nbsp;Dragon</span>
						<span class=""></span>
					</button>
				</div>
				<div class="">
					<button tabindex="0" class="vix an3" type="button">
						<span class=""><strong>C.</strong>&nbsp;Leviathan</span>
						<span class=""></span>
					</button>
				</div>
				<div class="">
					<button tabindex="0" class="vix an4" type="button">
						<span class=""><strong>D.</strong>&nbsp;Wyvern</span>
						<span class=""></span>
					</button>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="block pd-15 text-center">
			<a href="quiz-result.php" class="btn btn-primary btn-round">Check Result</a>
		</div>
		
      </div>
			
		  
	  </div>
	
<?php include('inc_footer.php'); ?>
	  
</body>
</html>
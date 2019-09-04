<?php include('inc_head.php'); ?>
	  
</head>
<body>
	  <div id="loader"><div id="spin"></div></div>
	  
	  <div class="page bgImg">
	  <?php include('inc_topmenu.php'); ?>
	  <div class="clearfix"></div>
	  
	  <?php include('inc_leftmenu.php'); ?>
	  
	  <div class="page-content">
		<div class="" style="margin-top: 1px">
			<!-- Swiper -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
				  <div class="swiper-slide">
					<a href="detail.php"><img src="img/1b.jpg" alt=""/> </a>
				  </div>
				  <div class="swiper-slide">
					<img src="img/2.jpg" alt=""/> 
				  </div>
				  <div class="swiper-slide">
					<img src="img/3.jpg" alt=""/> 
				  </div>
				</div>
				<!-- Add Arrows -->
				<!--<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>-->
			</div>  
		</div>
		
		<div class="block-title">
			<h3>Popular 1 Quiz</h3>
		</div>
		<div class="block">
			<div class="col-xs-6 mb-10">
		    	<a href="detail.php">
					<img src="img/qz1.jpg" alt="" class="img-responsive"/> 
					<div class="title">Bitcoin Quiz</div>
					<div class="desc">8 Questions</div>
				</a>
			</div>
			<div class="col-xs-6 mb-10">
		    	<a href="detail.php">
					<img src="img/qz2.jpg" alt="" class="img-responsive"/> 
					<div class="title">Gaming World Quiz</div>
					<div class="desc">15 Questions</div>
				</a>
			</div>
			<div class="col-xs-6 mb-10">
		    	<a href="detail.php">
					<img src="img/qz3.jpg" alt="" class="img-responsive"/> 
					<div class="title">Social Media</div>
					<div class="desc">10 Questions</div>
				</a>
			</div>
			<div class="col-xs-6 mb-10">
		    	<a href="detail.php">
					<img src="img/qz4.jpg" alt="" class="img-responsive"/> 
					<div class="title">Visit The World</div>
					<div class="desc">12 Questions</div>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="block-title">
			<h3>Latest Quiz</h3>
		</div>
		<div class="block" style="padding: 15px">
			<div data-slides-offset-after="16" data-slides-offset-before="16" data-space-between="16" data-slides-per-view="3" class="swiper-container2 swiper-init mb-15">
            <div class="swiper-wrapper">
				
              <div class="swiper-slide">
               <a href="detail.php" class="link display-block">
                <div class="thumb">
                  <div class=" cover-bg" style="background-image: url('img/qz4.jpg')">
                  </div>
                  <div class="thumb-meta">
                    <h4>Visit The Workd</h4>
                    <p>12 Questions</p>
                  </div>
									
                </div>
                </a>
              </div>
              <div class="swiper-slide">
			  	<a href="detail.php" class="link display-block">
					<div class="thumb">
					  <div class=" cover-bg" style="background-image: url('img/qz3.jpg')">
					  </div>
					  <div class="thumb-meta">
						<h4>Social Media</h4>
						<p>12 Questions</p>
					  </div>
					</div>
			  	</a>
              </div>
              <div class="swiper-slide">
				  <a href="detail.php" class="link display-block">
					<div class="thumb">
					  <div class=" cover-bg" style="background-image: url('img/qz2.jpg')">
					  </div>
					  <div class="thumb-meta">
						<h4>Gaming World Quiz</h4>
						<p>12 Questions</p>
					  </div>
					</div>
				  </a>
              </div>
              <div class="swiper-slide">
				  <a href="detail.php" class="link display-block">
					<div class="thumb">
					  <div class="cover-bg " style="background-image: url('img/qz1.jpg')">
					  </div>
					  <div class="thumb-meta">
						<h4>Bitcoin Quiz</h4>
						<p>12 Questions</p>
					  </div>
					</div>
				  </a>
              </div>
              <div class="swiper-slide">
				  <a href="detail.php" class="link display-block">
					<div class="thumb">
					  <div class="cover-bg" style="background-image: url('img/qz4.jpg')">
					  </div>
					  <div class="thumb-meta">
						<h4>Visit The Workd</h4>
						<p>12 Questions</p>
					  </div>
					</div>
				  </a>
              </div>
				
            </div>
          </div>
		</div>		
		
      </div>
			
		  
	  </div>
	
<?php include('inc_footer.php'); ?>
	  
</body>
</html>
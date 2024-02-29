<?php 
	include('header.php');
?>
			<!-- Portfolio Section -->
			<section id="PortBanner">
				<div class="container">
					<header class="section-header">	
						<h3 class="text-white">Video Blog</h3>
					</header>
				</div>
			</section>
			<section id="portfolio"  class="section-bg" >
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<ul id="portfolio-flters">
								<li data-filter="*" class="filter-active">All</li>
								<li data-filter=".filter-app">Make</li>
								<li data-filter=".filter-card">Story</li>
								<li data-filter=".filter-web">Review</li>
							</ul>
						</div>
					</div>
					<div class="row portfolio-container">
						<div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
							<div class="portfolio-wrap">
								<figure>
									<img style="width:400px; height:240px;" src="img/Video/1.png" class="img-fluid" alt="">
									<a href="img/Video/1.png" data-lightbox="portfolio" data-title="Text 1" class="link-preview" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="https://www.youtube.com/watch?v=-HCaHT5qcE4" target="_blank" class="link-details" title="More Details">
										<i class="ion ion-android-open"></i>
									</a>
								</figure>
								<div class="portfolio-info">
									<h4>Rasberry Cheesecake</h4>
									<p>Make</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
							<div class="portfolio-wrap">
								<figure>
									<img style="width:400px; height:240px;" src="img/Video/2.png" class="img-fluid" alt="">
									<a href="img/Video/2.png" class="link-preview" data-lightbox="portfolio" data-title="Text 2" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="https://www.youtube.com/watch?v=ZMNtYq3JIXI" target="_blank"  class="link-details" title="More Details">
										<i class="ion ion-android-open"></i>
									</a>
								</figure>
								<div class="portfolio-info">
									<h4>Food Ingredients Processed</h4>
									<p>Story</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
							<div class="portfolio-wrap">
								<figure>
									<img style="width:400px; height:240px;" src="img/Video/3.png" class="img-fluid" alt="">
									<a href="img/Video/3.png" class="link-preview" data-lightbox="portfolio" data-title="Text 3" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="https://www.youtube.com/watch?v=a9bkYZvF2gQ" target="_blank"  class="link-details" title="More Details">
										<i class="ion ion-android-open"></i>
									</a>
								</figure>
								<div class="portfolio-info">
									<h4>Food Ingredients</h4>
									<p>Review</p>
								</div>
							</div>
						</div>
						<!--<div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
							<div class="portfolio-wrap">
								<figure>
									<img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
									<a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Type B" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
								</figure>
								<div class="portfolio-info">
									<h4><a href="#">Product D</a></h4>
									<p>Type B</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
							<div class="portfolio-wrap">
								<figure>
									<img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
									<a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Type C" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
								</figure>
								<div class="portfolio-info">
									<h4><a href="#">Product E</a></h4>
									<p>Type C</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
							<div class="portfolio-wrap">
								<figure>
									<img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
									<a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Type A" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
								</figure>
								<div class="portfolio-info">
									<h4><a href="#">Product F</a></h4>
									<p>Type A</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
							<div class="portfolio-wrap">
								<figure>
									<img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
									<a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Type B" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
								</figure>
								<div class="portfolio-info">
									<h4><a href="#">Product G</a></h4>
									<p>Type B</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
							<div class="portfolio-wrap">
								<figure>
									<img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
									<a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Type B" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
								</figure>
								<div class="portfolio-info">
									<h4><a href="#">Product H</a></h4>
									<p>Type B</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
							<div class="portfolio-wrap">
								<figure>
									<img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
									<a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Type C" title="Preview">
										<i class="ion ion-eye"></i>
									</a>
									<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
								</figure>
								<div class="portfolio-info">
									<h4><a href="#">Product I</a></h4>
									<p>Type C</p>
								</div>
							</div>
						</div>-->
					</div>
				</div>
			</section>
<?php 
	include('footer_end.php');
?>
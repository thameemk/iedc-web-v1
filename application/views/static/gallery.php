			  <!-- start banner Area -->
			<section class="banner-area relative about-banner-gallery" id="home">
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1  style="color: #884EA0">
								Gallery
							</h1>
							<p class="link-nav"  style="color: #884EA0"><a  style="color: #884EA0" href="<?php echo base_url();?>home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a  style="color: #884EA0" href="<?php echo base_url();?>gallery"> Gallery</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start gallery Area -->
			<section class="service-area section-gap">
				<div class="container">					
					<div class="row">
						<?php
						foreach($showGallery as $row){
						?>	
						<div class="col-lg-3 col-md-6">
							<div class="single-service">
								<a href="<?php echo base_url()?>assets/uploads/gallery/<?=$row['imageName']?>" class="img-gal"><div class="single-gallery-image" style="background: url(<?php echo base_url()?>assets/uploads/gallery/<?=$row['imageName']?>);"></div></a>
								<p><br>	<?=$row['imageData']?></p>
							</div>
						</div>	
						<?php } ?>
					</div>
				</div>
			</section>
			<!-- End gallery arae -->

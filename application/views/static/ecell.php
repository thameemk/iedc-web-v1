

			<!-- start banner Area -->
			<section class="banner-area relative about-banner-ecell" id="ecell">

				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								E-Cell
							</h1>
							<p class="text-white link-nav"><a href="<?php echo base_url();?>home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url();?>ecell"> E-Cell</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->


			<!-- Start text Area -->
				<div class="whole-wrap">
					<h3 class="mb-30" style="text-align: center;"><br><br><br>Incubated companies</h3>
				<div class="container">
					<hr>
					<?php
					foreach ($incubated as $row) {
					?>
					<div class="section-top-border">
						<h3 class="mb-30"><?=$row['companyHead']?></h3>
						<div class="row">
							<div class="col-md-3">
								<img src="<?php echo base_url()?>assets/uploads/ecell/<?=$row['imageLink']?>" alt="<?=$row['companyHead']?>" class="img-fluid">
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p" style="text-align: justify;">
								<p><?=$row['companyData']?></p>
							</div>
						</div>
					</div>
					<hr>
					<?php }?>								
				</div>
			</div>
			<hr>
			<!--End text area-->


			<div class="whole-wrap">
				<h3 class="mb-30" style="text-align: center;"><br><br><br>Incubating companies</h3>
					<div class="container">
						<hr>
						<?php
					foreach ($incubating as $row) {
					?>
						<div class="section-top-border">
							<h3 class="mb-30"><?=$row['companyHead']?></h3>
							<div class="row">
								<div class="col-md-3">
									<img src="<?php echo base_url()?>assets/uploads/ecell/<?=$row['imageLink']?>" alt="<?=$row['companyHead']?>" class="img-fluid">
								</div>
								<div class="col-md-9 mt-sm-20 left-align-p" style="text-align: justify;">
									<p>	<?=$row['companyData']?>								
									</p>
								</div>
							</div>
						</div>
						<hr>	
					<?php }?>								

					</div>
			</div>

			<!-- End 		 -->
<hr>

			<!-- Start TBI registration area-->
			<div class="container">
				<h3 class="mb-30" style="text-align: center;"><br><br><br>Download Registration form</h3>
				<p clas="mb-30" style="text-align: center;"><a href="<?php echo base_url()?>assets/front/TBI_Application_Form.doc">Click Here to Download Technology Business Incubator registration form for Startups</a></p>
				<br><br><br>
			</div>
			<!-- End TBI registration area -->

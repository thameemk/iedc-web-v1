<!-- animation area -->
<section>
	<iframe src="<?php echo base_url()?>/assets/front/animation" width="100%" height="465"></iframe>
</section>
<br>
<!-- animation closing -->

<!-- start congrats area-->
<h1 style="text-align: center;" class="mb-5 mt-5">Dreams into Reality</h1>
<section class="feature-area" id="appreciation" style="align-content: center;">


	<div class="container">
		<div class="row">
			<?php
								$i=0;
								foreach($congrats as $row){
									if($i==3) break;
									$i++;
							?>

			<div class="col-lg-3 col-md-6">
				<div class="single-service">
					<a href="#" data-toggle="modal" class="mt-5" data-target="#<?=$row['modalId']?>" style="font-weight: bold;color: #0b0b0c; font-size: 15px; text-align: justify;">
						<img class="img-fluid" src="<?php echo base_url()?>assets/uploads/appreciation/<?=$row['imageLink']?>" alt="">
						<?=$row['shortContent']?>
						<span style="color: #0707f2"> Readmore</span></a>
				</div>
			</div>

			<div class="modal fade" id="<?=$row['modalId']?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="img-fluid rounded" width="100%" height: auto src="<?php echo base_url()?>assets/uploads/appreciation/<?=$row['imageLink']?>" alt="">
							<hr>
							<div class="container" style="text-align: justify;">
								<p style="font-weight: bold;">
									<?=$row['fullContent']?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<!--modal-->
</section>


<!-- end congrats area -->

<!-- Start vision Area -->
<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 open-hour-wrap" style="text-align: justify;padding-left: 10px;padding-right: 10px;">
				<?php
							foreach($publicInfo as $row){
							?>
				<h1 style="text-align: center;"><?=$row['pTitle']?></h1>
				<p>
					<?=$row['pContent']?>
				</p>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- End vision Area -->

<!-- Start home-about Area -->
<section class="home-about-area section-gap relative">
	<div class="container">
		<div class="row align-items-center justify-content-end">
			<div style="text-align: justify;padding-right: 10px">
				<div class="col-lg-6 no-padding home-about-right">
					<h1 class="text-white" style="text-align: center;">
						About Us
					</h1>
					<p class="text-white">

						The Innovation and Entrepreneurship Development Cell of TKMCE is an organisation that aims to promote the institutional vision of transforming youngsters into technological entrepreneurs and innovative leaders. The initiative
						is to address the rising trend of corporate job culture and establish a platform to pursue ideas and businesses at an early stage. We at IEDC TKMCE host various workshops, speaker sessions, competitions to develop skill sets
						and provide essential resources to take up entrepreneurship as a career.
					</p>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End home-about Area -->



<!-- upcoming treks -->

<section class="feature-area section-gap" id="updates" style="align-content: center;">
	<h1 style="text-align: center;" class=" mt-5 mt-3">Upcoming Treks</h1>
	<h4 style="text-align: center;" class="mb-5">Check Out our new events and Programms</h4>
	<div class="container">
		<div class="row">
			<?php

								foreach($upcomingInfo as $row){

							?> <div class="icon">
				<span class="lnr lnr-calendar-full"></span>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-service">
					<a href="#" data-toggle="modal" class="mt-5" data-target="#<?=$row['modalId']?>" style="font-weight: bold;color: #0b0b0c; font-size: 15px; text-align: justify;">
						<img class="img-fluid mb-3" src="<?php echo base_url()?>assets/uploads/upcoming/<?=$row['imageLink']?>" alt="">
						<?=$row['uTitle']?>
						<span style="color: #0707f2"> ...Readmore</span></a>
				</div>
			</div>
			<div class="modal fade" id="<?=$row['modalId']?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">
								<?=$row['uTitle']?>
							</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="img-fluid rounded" width="100%" height: auto src="<?php echo base_url()?>assets/uploads/upcoming/<?=$row['imageLink']?>" alt="">
							<hr>
							<div class="container" style="text-align: justify;">
								<p style="font-weight: bold;">
									<?=$row['uContent']?> <br>
									Date : <?=$row['uDate']?><br>
									Time : <?=$row['uTime']?><br>
									Venue : <?=$row['uVenue']?> <br>
									Contact : <?=$row['uContact']?>
								</p>
							</div>
						</div>
						<div class="modal-footer">
							<a href="javascript:void" onclick="window.location = '<?=$row['uRegistration']?>';"><button type="button" class="btn btn-outline-success">Register!!</button></a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<!-- End upcoming treks-->

			<!-- start banner Area -->
			<section class="banner-area relative about-banner-team" id="home">
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 style="color: #884EA0">
								Team
							</h1>
							<p class="link-nav"  style="color: #884EA0"><a  style="color: #884EA0" href="<?php echo base_url();?>home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a  style="color: #884EA0" href="<?php echo base_url();?>team"> Team</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<!-- Start team Area -->
			<section class="team-area section-gap" id="team">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Executive Committee 2019- 2020</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="row justify-content-center d-flex align-items-center">
		            	<?php
		            	foreach ($execom5 as $row) {
		            	?>		    
		                <div class="col-lg-3 col-md-6 single-team" >
		                    <div class="thumb" >
		                        <img class="img-fluid"  src="<?php echo base_url()?>assets/uploads/team/2019-2020/<?=$row['imageLink']?>" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
		                            <p>
		                            	<?=$row['position']?>
		                            </p>
		                            <h4><?=$row['Name']?></h4>
		                        </div>
		                    </div>
		                </div>	
		                <?php } ?>	               
		            </div>
		        </div>
		    </section>			
		    <section class="team-area section-gap" id="team">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Executive Committee 2018 - 2019</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="row justify-content-center d-flex align-items-center">
		            	<?php
		            	foreach ($execom4 as $row) {
		            	?>		    
		                <div class="col-lg-3 col-md-6 single-team" >
		                    <div class="thumb" >
		                        <img class="img-fluid"  src="<?php echo base_url()?>assets/uploads/team/2018-2019/<?=$row['imageLink']?>" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
		                            <p>
		                            	<?=$row['position']?>
		                            </p>
		                            <h4><?=$row['Name']?></h4>
		                        </div>
		                    </div>
		                </div>	
		                <?php } ?>	               
		            </div>
		        </div>
		    </section>			
		     <section class="team-area section-gap" id="team">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Executive Committee 2017 - 2018</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="row justify-content-center d-flex align-items-center">
		            	<?php
		            	foreach ($execom3 as $row) {
		            	?>		    
		                <div class="col-lg-3 col-md-6 single-team" >
		                    <div class="thumb" >
		                        <img class="img-fluid"  src="<?php echo base_url()?>assets/uploads/team/2017-2018/<?=$row['imageLink']?>" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
		                            <p>
		                            	<?=$row['position']?>
		                            </p>
		                            <h4><?=$row['Name']?></h4>
		                        </div>
		                    </div>
		                </div>	
		                <?php } ?>	               
		            </div>
		        </div>
		    </section>			
		    <section class="team-area section-gap" id="team">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Executive Committee 2016- 2017</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="row justify-content-center d-flex align-items-center">
		            	<?php
		            	foreach ($execom2 as $row) {
		            	?>		    
		                <div class="col-lg-3 col-md-6 single-team" >
		                    <div class="thumb" >
		                        <img class="img-fluid"  src="<?php echo base_url()?>assets/uploads/team/2016-2017/<?=$row['imageLink']?>" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
		                            <p>
		                            	<?=$row['position']?>
		                            </p>
		                            <h4><?=$row['Name']?></h4>
		                        </div>
		                    </div>
		                </div>	
		                <?php } ?>	               
		            </div>
		        </div>
		    </section>		
		    <section class="team-area section-gap" id="team">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Executive Committee 2015 - 2016</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="row justify-content-center d-flex align-items-center">
		            	<?php
		            	foreach ($execom1 as $row) {
		            	?>		    
		                <div class="col-lg-3 col-md-6 single-team" >
		                    <div class="thumb" >
		                        <img class="img-fluid"  src="<?php echo base_url()?>assets/uploads/team/2015-2016/<?=$row['imageLink']?>" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
		                            <p>
		                            	<?=$row['position']?>
		                            </p>
		                            <h4><?=$row['Name']?></h4>
		                        </div>
		                    </div>
		                </div>	
		                <?php } ?>	               
		            </div>
		        </div>
		    </section>				
		    <!-- End team Area -->

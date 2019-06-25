	<!-- Start Contact Area -->
		<section class="appoinment-area section-gap relative mt-5" id="contact">
			<div class="container">
				<div class="row align-items-center justify-content-end">
					<div class="col-lg-6 no-padding appoinment-right">
						<h1 class="text-white">
							Contact Us
						</h1>
						<h4 class="head-font" style="color:#ff2d00;"><?= $this->session->flashdata('success') ?></h4><?= $this->session->flashdata('true') ?>
                                <h4 class="head-font" style="color:#ff2d00;"><?= $this->session->flashdata('fail') ?></h4>
                             
						<form class="appoinment-form" action="<?=base_url()?>Contact/postEmail" method="post">
							

													<div class="row">
															<div class="col-lg-12 d-flex flex-column">
																	<input name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Name'" class="form-control mt-20" required type="text">
															</div>
															<div class="col-lg-6 d-flex flex-column">
																	<input name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" class="form-control mt-20" required type="email">
															</div>
															<div class="col-lg-6 d-flex flex-column">
																	
																	<input name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" class="form-control mt-20" required type="text">
															</div>


															<div class="col-lg-12 flex-column">
																	<textarea  rows="5" class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
															</div>																												
													</div>
													<button type="submit" class="mt-3 ui inverted green button  ">Send</button>
															
											</form>
									 </div>
							</div>
					</div>
			</section>
		<!-- End Contact Area -->
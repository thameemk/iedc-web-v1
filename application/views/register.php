

			<!-- start banner Area -->
			<section class="banner-area relative about-banner-register" id="IR-Cell">

				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Register
							</h1>
							<p class="text-white link-nav"><a href="<?php echo base_url();?>Home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url();?>Home/Register"> Registor</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->


			<!-- start registration area -->
			<section  id="JOIN">
        <div class="container">
          <div class="section-top-border">
        <h3 class="mb-30">Register Here</h3>
          <div class="col-lg-6 no-padding appoinment-right">
            <h1 class="text-white"> Join with us</h1>
                        <form class="appoinment-form" name="submit-to-google-sheet">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <input name="first_name" placeholder=" First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = ' First Name'" class="form-control mt-20" required="" type="text">
                                </div>
                                <div class="col-lg-12 d-flex flex-column">
                                    <input name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Last Name'" class="form-control mt-20"  type="text">
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                  <input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="Email">
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                  <input name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="tel" >
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                  <input name="branch" placeholder="Branch" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Branch'" class="form-control mt-20" required="" type="text" >
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                  <input name="course_duration" placeholder="Course Duration" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Course Duration'" class="form-control mt-20" required="" type="text" >
                                </div>


                                <div class="col-lg-6 d-flex flex-column">
                                  <input type="number" name="admission_number" placeholder="Admission number" onfocus="this.placeholder = ''" onblur="this.placeholder ='Admission Number'" class="form-control mt-20" required="">
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                  <input type="date" name="dob" placeholder="Date Of Birth" onfocus="this.placeholder = ''" onblur="this.placeholder ='Date Of Birth'" class="form-control mt-20" required="">
                                </div>
                                 <div class="col-lg-12 flex-column">
                                    <textarea  rows="5" class="form-control mt-20" name="message" placeholder="Why IEDC?" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Why IEDC?'"></textarea>
                                </div>
				<div class="col-lg-6 flex-column"><br/>
					<span id="alert_submission" class=""></span>
				</div>
				 <div class="col-lg-6 d-flex justify-content-end send-btn">
				 	<button type="submit" class="primary-btn primary mt-20 text-uppercase ">Submit</button>
				</div>
                            </div>
                        </form>

                        <br>
          </div>
        </div>
        </div>
      </section>
			<!-- End registartion area -->

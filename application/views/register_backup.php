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
																<div class="col-lg-12 d-flex flex-column">
                                  <select name="branch" class="form-control mt-20" required="" type="text" >
                                  	<option value="">Branch</option>
                                  	<option value="M-Tech">M-Tech</option>
                                  	<option value="Architecture">Architecture</option>
									<option value="Chemical Engineering">Chemical Engineering</option>
									<option value="Civil Engineering">Civil Engineering</option>
									<option value="Computer Science & Engineering">Computer Science & Engineering</option>
									<option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
									<option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
									<option value="Master of Computer Application">Master of Computer Application</option>
									<option value="Mechanical Engineering">Mechanical Engineering</option>
									<option value="Mechanical Production">Mechanical Production</option>
								  </select>
                                </div>
																<div class="col-lg-12 d-flex flex-column">
																 <font style="font-weight: bold;color:#37393B">
																	 <br>
																	 Course Duration:
																 </font>
															 </div>
																<div class="col-lg-6 d-flex flex-column">
                                  <select  name="course_duration_1"  class="form-control mt-20" required="">
                                  	<option value="">From</option>
                                  	<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
								  </select>
								</div>
								<div class="col-lg-6 d-flex flex-column">
								  <select  name="course_duration_2"  class="form-control mt-20" required="">
								  	<option value="">To</option>
                                  	<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
								  </select>
                                </div>


                                <div class="col-lg-6 d-flex flex-column">
                                  <input type="number" name="admission_number" placeholder="Admission number" onfocus="this.placeholder = ''" onblur="this.placeholder ='Admission Number'" class="form-control mt-20" required="">
                                </div>
																<div class="col-lg-12 d-flex flex-column">
                                	<font style="font-weight: bold;color:#37393B">
                                		<br>
                                		Date Of Birth:
                                	</font>
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
				<br>&nbsp;
				 <div class="col-lg-6 d-flex justify-content-end send-btn">
				 	<button type="submit" class="ui inverted green button  " id="reg">Submit</button>
				</div>
                            </div>
                        </form>

                        <br>
          </div>
        </div>
        </div>
      </section>
<!-- End registartion area -->

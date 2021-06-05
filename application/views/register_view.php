<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_htmlhead'); ?>
</head>
<body>
	<?php $this->load->view('_header'); ?>
    <?php $this->load->view('_navbar'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url();?>webassets/images/course-6.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Register</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Register <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	<section class="ftco-section contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				
				<div class="col-md-12 p-4 p-md-12 order-md-last bg-light">
				<center><h4>Register</h4></center>
				<?php echo validation_errors(); ?>
				<form method="post" action="<?php echo base_url() . 'user/register'; ?>">
						<div class="form-group">
							<input type="text" name="surname"class="form-control" placeholder="Surname">
						</div>
						<div class="form-group">
							<input type="text" name="firstname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
							<input type="text" name="othername" class="form-control" placeholder="Other Names">
                        </div>
                        <div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Email@">
                        </div>
                        <div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
							<input type="password" name="confirm_pass" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
							<select class="custom-select" name="gender" required>
								<option value="">Select your Gender</option>
								<option name="male" value="Male">Male</option>
								<option name="female" value="Female">Female</option>
							</select>
						</div>
                        <div class="form-group">
							<input type="number" name="matric" class="form-control" placeholder="Matric No">
                        </div>
                        <div class="form-group">
							<select class="custom-select" name="level" required>
								<option value="">Select your Level</option>
								<option name="100" value="100">Level 100</option>
                                <option name="200" value="200">Level 200</option>
                                <option name="300" value="300">Level 300</option>
                                <option name="400" value="400">Level 400</option>
                                <option name="500" value="500">Level 500</option>
                                <option name="600" value="600">Level 600</option>
							</select>
						</div>
                        <div class="form-group">
							<select class="custom-select" name="dept" required>
								<option value="">Select your Department</option>
								<option name="dept1" value="Department Of Biological Sciences">Department Of Biological Sciences</option>
                                <option name="dept2" value="Department Of Chemical Sciences">Department Of Chemical Sciences</option>
                                <option name="dept3" value="Department Of Physical Sciences">Department Of Physical Sciences</option>
                                <option name="dept4" value="Department Of Computer Sciences and Information Technology">Department Of Computer Sciences and Information Technology</option>
							</select>
                        </div>
                        <div class="form-group">
                            <input type="number" name="entryyear" class="form-control" placeholder="Entry Year">
                        </div>
                        <div class="form-group">
							<select class="custom-select" name="course" required>
								<option value="">Select your Course Duration</option>
								<option name="1" value="1">1 Year</option>
                                <option name="2" value="2">2 Years</option>
                                <option name="3" value="3">3 Years</option>
                                <option name="4" value="4">4 Years</option>
                                <option name="5" value="5">5 Years</option>
                                <option name="6" value="6">6 Years</option>
							</select>   
                        </div>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
						<a style="color:#1fb6ff;" href="<?php echo base_url(); ?>user/login" title="">Have an account?</a>
					
						<div class="form-group">
							<input type="submit" value="Register" class="btn btn-primary py-3 px-5">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
		<?php $this->load->view('_footer'); ?>
		<?php $this->load->view('_footerscripts'); ?>
	</body>
</html>
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
            <h1 class="mb-2 bread">Login</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	<section class="ftco-section contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				
				<div class="col-md-12 p-4 p-md-12 order-md-last bg-light">
				<center><h4>Login</h4></center>
				<?php if ($this->session->flashdata(SUCCESS_MESSAGE)) : ?>
								<?php echo  '<p class="alert alert-success">' . $this->session->flashdata(SUCCESS_MESSAGE) . '</p>' ?>
							<?php endif; ?>

							<?php if ($this->session->flashdata(ERROR_MESSAGE)) : ?>
								<?php echo  '<p class="alert alert-danger">' . $this->session->flashdata(ERROR_MESSAGE) . '</p>' ?>
							<?php endif; ?>
							<form method="post" action="<?php echo base_url() . 'user/login'; ?>">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your Email">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Your Password">
							</div>
						<a href="<?php echo base_url(); ?>user/forgotPassword" title="" class="forgot-pwd">Forgot Password?</a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a style="color:#1fb6ff;" href="<?php echo base_url(); ?>user/register" title="">Don't have an account?</a>
					
						<div class="form-group">
							<input type="submit" value="Login" class="btn btn-primary py-3 px-5">
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
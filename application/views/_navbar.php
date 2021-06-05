<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="<?php echo base_url(); ?>" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url(); ?>About" class="nav-link">About</a></li>
				<?php if (!$this->session->userdata('logged_in')) : ?>
					<li class="nav-item"><a href="<?php echo base_url(); ?>admin/login" class="nav-link">Admin Login</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>user/login" class="nav-link">Login</a></li>
				<?php endif; ?>
				<?php if ($this->session->userdata('logged_in')) : ?>
					<li class="nav-item"><a href="<?php echo base_url(); ?>dashboard" class="nav-link">Dashboard</a></li>
            	<?php endif; ?>
	          <li class="nav-item"><a href="<?php echo base_url(); ?>Contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_htmlhead'); ?>
</head>
<body>
<?php $this->load->view('_header'); ?>
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
                <li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="<?php echo base_url(); ?>About" class="nav-link">About</a></li>
                <?php if (!$this->session->userdata('logged_in')) : ?>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>admin/login" class="nav-link">Admin Login</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>user/login" class="nav-link">Login</a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')) : ?>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>dashboard" class="nav-link">Dashboard</a></li>
                <?php endif; ?>
                <li class="nav-item active"><a href="<?php echo base_url(); ?>Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>webassets/images/contact.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Address</h3>
                    <p>km 8, Idiroko, Benja Village, Ota Ogun ,State</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel://07033180831"> 07033180831</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="mailto:info@bellsuniversity.edu.ng">info@bellsuniversity.edu.ng</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Website</h3>
                    <p><a href="#">bellsuniversity.edu.ng</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscripts'); ?>
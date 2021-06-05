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
                <li class="nav-item active"><a href="<?php echo base_url(); ?>About" class="nav-link">About</a></li>
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

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>webassets/images/about2.jpeg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">About Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                <div class="img" style="background-image: url('<?php echo base_url(); ?>webassets/images/about3.jpg'); border"></div>
            </div>
            <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                <h2 class="mb-4">Bells University of Technology, Ota,is Nigeria’s First Private University of Technology. It was granted operational license on 9th June, 2005 and commenced operation on 1st July, of the same year.</h2>
                <p>The idea of Bells University of Technology was conceived following the desire of the Bells Educational Foundation to establish a unique University where the good foundation given to products of its Secondary School and other Secondary Schools could be built upon.</p>
                <p>To ensure uniqueness, the Foundation decided to establish a University that would offer courses which would support relevant and sustainable technologies that were transferable, ICT-driven, and at the cutting edge of Science and Technology. In order to realize its dream, the Bells Educational Foundation obtained an application form for the establishment of a Private University from the National Universities Commission (NUC) on 10th January, 2002 and submitted the application forms on 10th November, 2004.</p>
            </div>
        </div>
    </div>
</section>




<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('<?php echo base_url(); ?>webassets/images/bg.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
            <div class="col-md-6 align-items-stretch d-flex">
                <div class="img img-video d-flex align-items-center" style="background-image: url('<?php echo base_url(); ?>webassets/images/about-2.jpg');">
                    <div class="video justify-content-center">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                <h2 class="mb-4">BELLSTECH University</h2>
                <p>The curriculum of Bells University of Technology, Ota emphasizes self-reliance and nurturing of entrepreneurial skills necessary for the development of the individual and the nation in general. Thus, all the programmes run by Bellstech are science based, which are vital to the technological development of the Nation. In addition, there is emphasis on morals and good character formation.</p>
                <p>The main objective of the University is to provide an enabling environment for effective learning and teaching, applying the results of research at the cutting-edge of science and technology. Emphasis is placed on areas of training that are suitable for self-employment creation and on those that have relevance to social, cultural, economic, scientific, and technological needs of Nigeria.</p>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="18">0</strong>
                                <span>Certified Teachers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="401">0</strong>
                                <span>Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                                <span>Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="50">0</strong>
                                <span>Awards Won</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('_footer'); ?>
<?php $this->load->view('_footerscripts'); ?>
<?php $this->load->view('admin/_htmlhead'); ?>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<?php $this->load->view('admin/_header'); ?>
<div class="app-main">
<?php $this->load->view('admin/_sidebar'); ?>
<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-graph text-success">
                                        </i>
                                </div>
                                <div>Student Info
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <form class="">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label class="">SurName</label><input name="surname" readonly value="<?php echo $surname; ?>" id="exampleEmail11" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label class="">First-Name</label><input name="firstname" readonly value="<?php echo $firstname; ?>" id="examplePassword11" type="text" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-group"><label class="">Other-Name</label><input name="othername" readonly value="<?php echo $othername; ?>" id="exampleAddress" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label class="">Email</label><input name="email" readonly value="<?php echo $email; ?>" id="exampleAddress2" type="email" class="form-control">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label class="">Gender</label><input name="gender" readonly value="<?php echo $gender; ?>" id="exampleCity" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label class="">Matric</label><input name="matric" readonly value="<?php echo $matric; ?>" id="exampleState" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label class="">Level</label><input name="level" readonly value="<?php echo $level; ?>" id="exampleZip" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label class="">Department</label><input name="dept" readonly value="<?php echo $dept; ?>" id="exampleZip" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label class="">Entry Year</label><input name="entryyear" readonly value="<?php echo $entryyear; ?>" id="exampleZip" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label class="">Course Duration</label><input name="course" readonly value="<?php echo $course; ?>" id="exampleZip" type="text" class="form-control"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-graph text-success">
                                        </i>
                                </div>
                                <div>Update Student Payment Dues
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <form method="post" action="<?php echo base_url().'admindashboard/update_student'; ?>">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                            <input type='hidden' name="uid" class='form-control' id='u_id'
                                                value='<?php echo $id; ?>'>
                                                <div class="position-relative form-group"><label class="">Amount Paid</label><input name="amount_paid" value="<?php echo $amount_paid; ?>" id="exampleEmail11" type="text" class="form-control">
                                                </div>
                                            </div>
                                        <button type="submit" class="mt-2 btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <div class="badge badge-success mr-1 ml-0">
                                                <small>NEW</small>
                                            </div>
                                            Footer Link 4
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('admin/_footer'); ?>
        </div>
    </div>
<?php $this->load->view('admin/_footerscript'); ?> 
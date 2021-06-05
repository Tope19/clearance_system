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
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                </div>
                                <div>Bells  Dashboard
                                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Active Students
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="active btn btn-focus">Last Week</button>
                                            <button class="btn btn-focus">All Month</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                <?php if ($this->session->flashdata(SUCCESS_MESSAGE)) : ?>
                                    <?php echo  '<p class="alert alert-success">' . $this->session->flashdata(SUCCESS_MESSAGE) . '</p>' ?>
                                <?php endif; ?> 
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Surname</th>
                                                <th class="text-center">First-Name</th>
                                                <th class="text-center">Other-Name</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Student Info</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($list as $item){?>
                                            <tr>
                                                <td class="text-center text-muted">#<?php echo $item->id; ?></td>
                                                <td class="text-center"><?php echo $item->surname; ?></td>
                                                <td class="text-center"><?php echo $item->firstname; ?></td>
                                                <td class="text-center"><?php echo $item->othername; ?></td>
                                                <td class="text-center"><?php echo $item->gender; ?></td>
                                                <td class="text-center">
                                                <a href="<?php echo base_url() . 'admindashboard/UserDetails/' . $item->id  ?>" title="">Details</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                               
                <?php $this->load->view('admin/_footer'); ?>
            </div>
        </div>
        <?php $this->load->view('admin/_footerscript'); ?>    
            
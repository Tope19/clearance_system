<?php $this->load->view('user/_htmlhead'); ?>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<?php $this->load->view('user/_header'); ?>
<div class="app-main">
<?php $this->load->view('user/_sidebar'); ?>
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
                                <div class="card-header">View Payments
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="active btn btn-focus">Last Week</button>
                                            <button class="btn btn-focus">All Month</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Payment ID</th>
                                                <th class="text-center">Amount Paid</th>
                                                <th class="text-center">Payment Date and Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-muted">#<?php echo $id; ?></td>
                                                <td class="text-center"> &#x20A6;<?php echo $amount_paid; ?></td>
                                                <td class="text-center"><?php echo date("F j, Y, g:i a", strtotime($created_at)); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                               
                <?php $this->load->view('user/_footer'); ?>
            </div>
        </div>
        <?php $this->load->view('user/_footerscript'); ?>    
            
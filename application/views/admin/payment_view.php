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
                                                <th class="text-center">User ID</th>
                                                <th class="text-center">Amount Paid</th>
                                                <th class="text-center">Payment Date and Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($list as $item  ){?>
                                            <tr>
                                                <td class="text-center text-muted">#<?php echo $item->id; ?></td>
                                                <td class="text-center"><a href="<?php echo base_url() . 'admindashboard/UserDetails/' . $item->user_id  ?>"><?php echo $item->user_id; ?></a></td>
                                                <td class="text-center"> &#x20A6;<?php echo $item->amount_paid; ?></td>
                                                <td class="text-center"><?php echo date("F j, Y, g:i a", strtotime($item->created_at)); ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                               
                <?php $this->load->view('admin/_footer'); ?>
            </div>
        </div>
        <?php $this->load->view('admin/_footerscript'); ?>    
            
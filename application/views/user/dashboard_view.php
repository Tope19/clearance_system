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
                                    <i class="pe-7s-graph text-success">
                                        </i>
                                </div>
                                <div>My Info
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                <?php if ($this->session->flashdata(SUCCESS_MESSAGE)) : ?>
                                    <?php echo  '<p class="alert alert-success">' . $this->session->flashdata(SUCCESS_MESSAGE) . '</p>' ?>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata(ERROR_MESSAGE)) : ?>
                                    <?php echo  '<p class="alert alert-warning">' . $this->session->flashdata(ERROR_MESSAGE) . '</p>' ?>
                                <?php endif; ?> 
                                    <form id="bookingForm" method="post">
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
                <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-graph text-success">
                                        </i>
                                </div>
                                <div>Payment Status
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">

                                   <form method="post" action="<?php echo base_url().'Dashboard/payment'; ?>">
                                        <div class="form-row">
                                            <div class="col-md-6">
<!--                                                <div class="position-relative form-group"><label class="">Amount Paid</label><input name="amount_paid" readonly value="--><?php //echo $amount_paid; ?><!--" id="exampleEmail11" type="text" class="form-control"></div>-->

                                            <input type="hidden" name="id" value="<?=$id;?>" />
                                                <input type="hidden" value="<?=$owing = 5000;?>">
                                                <b style="color:red;">Pay the balance of &nbsp;&nbsp;&nbsp;<br>&#x20A6;<?php echo $owing ?></b>
                                                <button type="submit" class="mt-2 btn btn-primary">Pay Now</button>
                                            </div>

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
            <?php $this->load->view('user/_footer'); ?>
        </div>
    </div>
    <script>
           function payWithPaystack(){
                
                     $('#bookingForm').submit(function(e){
                         e.preventDefault();

                         var price = $('#owing').val();
                         var email = $('#email').val();
                         var surname = $('#surname').val();
                         var firstname = $('#firstname').val();
                         $('.viewForm').css('display','none');
                         $('#msgs').html('Processing.....');

                        
                                var handler = PaystackPop.setup({
                                key: 'pk_test_62aac6cd7d661e9820dcaad9a510ab80315b5b56',
                                email: email,
                                amount: (price*100),
                                currency: "NGN",
                                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                metadata: {
                                    custom_fields: [
                                        {
                                            display_name: firstname surname,
                                        }
                                    ]
                                },
                                callback: function(response){
                                    // alert('success. transaction ref is ' + response.reference);
                                    $('#response').css('display','block');
                                    $('#responseref').append('Payment reference number = #'+response.reference);
                                    console.log('success');
                                },
                                onClose: function(){
                                    $('.viewForm').css('display','block');
                                    $('#msgs').html('Transaction Cancelled');
                                }
                                });
                                handler.openIframe();
                     
                     });
            });
            </script>
<?php $this->load->view('user/_footerscript'); ?> 
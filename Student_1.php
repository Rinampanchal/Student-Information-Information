<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Student</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-book.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="#">
	         <div class="logo-container">
	            <div class="logo">
                        <img src="img/sis_mark (2).jpg">
	            </div>
	            <div class="brand">
	               SIS
	            </div>
	        </div>
	    </a>

		<!--  Made With Material Kit  -->
		<a href="#" class="made-with-mk">
			<div class="brand">SIS</div>
                        <div class="made-with">Student Information System <?php echo date('Y'); ?></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">Student</h3>
						<h5>Leave Management</h5>
		                    	</div>
					<div class="wizard-navigation">
                                            <ul>
                                                <li><a href="#apply" data-toggle="tab">Apply</a></li>
                                                <li><a href="#history" data-toggle="tab">History</a></li>
			                    </ul>
					</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="apply">
		                            	<div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class="info-text"> Apply Leave</h4>
                                                    </div>
                                                    <?php 
                                                        if (isset($_POST['btn_submit']))
                                                        {
                                                            
                                                        }
                                                    ?>
                                                    <form action="#" method="Post">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="material-icons">date_range</i>
                                                                    </span>
                                                                    <div class="form-group">
                                                                        <label class="control-label">From Date</label>
                                                                        <input name="fDate" type="date" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">                                                       
                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">access_time</i>
                                                                </span>
                                                                <div class="form-group ">
                                                                    <label class="control-label">From Time</label>
                                                                    <input name="fTime" type="time" class="form-control">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="material-icons">date_range</i>
                                                                    </span>
                                                                    <div class="form-group">
                                                                        <label class="control-label">TO Date</label>
                                                                        <input name="toDate" type="date" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">                                                       
                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">access_time</i>
                                                                </span>
                                                                <div class="form-group ">
                                                                    <label class="control-label">To Time</label>
                                                                    <input name="toTime" type="time" class="form-control">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-11">
                                                              <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">subject</i>
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Reason</label>
                                                                    <textarea name="reason" class="form-control"></textarea>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type='submit' class='btn btn-next btn-fill btn-info btn-wd' name='btn_submit' value="Apply Now" style="margin-left: 50px;" />
                                                    </form>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="history">
		                                <h4 class="info-text">Applied Leave</h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
                                                        View
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
<!--	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>-->
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Student Information System Made by <a href="http://www.creative-tim.com"> Sagar Chauhan.</a>
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>
</html>

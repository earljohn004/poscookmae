<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>USB FLASH WHERE ARE YOU</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen">
		<!-- <script type="text/javascript" src="assets/js/jquery&#45;1.11.0.min.js" ></script>  -->
		<!-- <script src="assets/js/bootstrap.min.js"></script>  -->
	</head>
	<body>
		<div id="alertID"class="alert alert-success alert-dismissable text-center">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Operation Sucessful</strong>
		</div>
		<div class="jumbotron text-center">
			<h1>USB-FD TRACKING BETA</h1>	
			<p class="text-info"> SD20 usb flash drive tracking web page </p>
		</div>
		<div class="container-fluid">
			<div> 
				<h3 class="text-center text-warning">History of usage...</h3>	
			</div>
		<div class="row">
			 <div class="col-md-4">
			 <div class="thumbnail">
				 <img src="assets/images/FD1.png" alt="Flash Drive 1" style="width:100%">
				 <div class="text-center text-primary well">
					 <h2><span id="nameContainer0">
					 <?php 
						$index = 0; 
						foreach($result as $row){
						if($index==0)
							echo $row->BorrowerName;

							$index++;
						}
					  ?>
					</span></h2>
				 </div>
				 <div class="text-center text-success well-sm">
					 <h4>Date borrowed: <br><span id="dateContainer0">
					 <?php 
						$index = 0; 
						foreach($result as $row){
						if($index==0)
							echo $row->DateTime;

							$index++;
						}
					  ?>
					 </span></h4>
				 </div>
		   	 </div>
			 </div>

			 <div class="col-md-4">
			 <div class="thumbnail">
				 <img src="assets/images/FD2.png" alt="Flash Drive 1" style="width:100%">
				 <div class="text-center text-primary well">
					 <h2><span id="nameContainer1">
					 <?php 
						$index = 0; 
						foreach($result as $row){
						if($index==1)
							echo $row->BorrowerName;

							$index++;
						}
					  ?>
					 </span></h2>
				 </div>
				 <div class="text-center text-success well-sm">
					 <h4>Date borrowed: <br><span id="dateContainer1">
					 <?php 
						$index = 0; 
						foreach($result as $row){
						if($index==1)
							echo $row->DateTime;

							$index++;
						}
					  ?>
					 </span></h4>
				 </div>
		   	 </div>
			 </div>

			 <div class="col-md-4">
			 <div class="thumbnail">
				 <img src="assets/images/FD3.png" alt="Flash Drive 1" style="width:100%">
				 <div class="text-center text-primary well">
					 <h2><span id="nameContainer2">
					 <?php 
						$index = 0; 
						foreach($result as $row){
						if($index==2)
							echo $row->BorrowerName;

							$index++;
						}
					  ?>
					 </span></h2>
				 </div>
				 <div class="text-center text-success well-sm">
					 <h4>Date borrowed: <br><span id="dateContainer2">
					 <?php 
						$index = 0; 
						foreach($result as $row){
						if($index==2)
							echo $row->DateTime;

							$index++;
						}
					  ?>
					 </span></h4>
				 </div>
		   	 </div>
			 </div>
		 </div>
		</div>
		<div class="container">
			<button id="myBtn" class="btn btn-block btn-danger btn-lg">I WANT TO BORROW FLASH DRIVE</button>
		</div>
		<p id="test"></p>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Input Information</h4>
        </div>

        <div class="modal-body" style="padding:40px 50px;">

			<!--		<form action="<?php echo base_url();?>" method="get" accept-charset="utf-8"> -->
            <div class="form-group">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Member Name</label>
			  <select class="form-control" id="username">
			  </select>
            </div>
            <div class="form-group">
              <label for="flashDriveNum"><span class="glyphicon glyphicon-list-alt"></span> Flash Drive Number</label>
			  <select id="flashDriveNum" class="form-control">
			  </select>
            </div>
              <button class="btn btn-success btn-block" id="registerToSite" ><span class="glyphicon glyphicon-off"></span> Log to Site</button>
			  <!--	</form> -->

        </div>
      </div>
      
	</div>
  </div> 

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="text-center">Authentication Window</h4>
        </div>

        <div class="modal-body" style="padding:40px 50px;">

			<!--		<form action="<?php echo base_url();?>" method="get" accept-charset="utf-8"> -->
            <div class="form-group">
              <label><span class="glyphicon glyphicon-user"></span> Name</label>
			  <h1 class="text-center text-primary" id="username_2Modal">TEST DATA</h1>
			</div>
			<div class="form-group">
              <label for="passwordID" id="oldPasswordLabelID" ><span class="glyphicon glyphicon-lock"></span> Password</label>
			  <input type="password" placeholder="Password" class="form-control" id="passwordID">
			  <p class="text-danger" id="checkPasswordID"></p>
			</div>
			<div class="form-group">
              <label for="confirmPasswordID" id="confirmPasswordLabelID"><span class="glyphicon glyphicon-lock"></span>New Password</label>
			  <input type="password" placeholder="New Password" class="form-control" id="confirmPasswordID">
			  <p class="text-danger" id="confirmPasswordID"></p>
			</div>
              <button class="btn btn-success btn-block" id="submitInfomation" ><span class="glyphicon glyphicon-off"></span> Register </button>
              <button class="btn btn-danger btn-block" id="changePasswordButtonID" ><span class="glyphicon glyphicon-pencil"></span> Change Password </button>
              <button class="btn btn-danger btn-block" id="submitChangePasswordButtonID" ><span class="glyphicon glyphicon-pencil"></span> Change Password </button>
			  <!--	</form> -->

        </div>
      </div>
      
	</div>
  </div> 
	</div>

	</body>
</html>

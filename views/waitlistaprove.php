<?php
session_start();
require("config.php");
////code
$id=$_GET['id'];
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['reg']))
{
	$name=$_POST['name'];
	$adress=$_POST['adress'];
	$postcode=$_POST['postcode'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
	$ustatus="no";
	
	
	
	
	
	$query1 = "SELECT * FROM user where uemail='$email'";
	$res=mysqli_query($con, $query1);
	$num=mysqli_num_rows($res);
	
	
		if($num > 0)
		{
			$error = "<p class='alert alert-warning'>Email Id Exist</p> ";
			
		}
		else
		{
			
			if(!empty($name) && !empty($adress) && !empty($postcode) && !empty($email) && !empty($phone))
			{
				
				$sql="INSERT INTO user (uname,uadress,upostcode,uemail,uphone,ustatus) VALUES ('$name','$adress','$postcode','$email','$phone','$ustatus')";
				$result=mysqli_query($con, $sql);
				
				if($result){
					
					$msg = "<p class='alert alert-primary'>User was set</p>";
				}
				else{
					$error = "<p class='alert alert-warning'>Register Not primaryfully</p> ";
				}
			}else{
				$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
			}
		}
	
	
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM HOMES | Property</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Create User</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Create User</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Create</h4>
								</div>
                                <?php
                            
                            
                            $query=mysqli_query($con,"SELECT * FROM `waitlist` WHERE id ='$id'");
                            while($row=mysqli_fetch_array($query))
                            {?>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">User detail</h5>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Name</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="name" value="<?php echo $row['3'];?>"required>
													</div>
												</div>
												
												
											</div>
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Adress</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="adress"  placeholder="Aplicant Adress*"required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Post Code</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="postcode" placeholder="Aplicant Post Code*" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Email</label>
													<div class="col-lg-9">
														<input type="email" class="form-control" name="email" value="<?php echo $row['10'];?>" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Phone</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="phone" value="<?php echo $row['8'];?>"  maxlength="10" required>
													</div>
												</div>
												
											</div>   
											
										</div>
										
										
                                        <?php } ?>
										
									        <button class="btn btn-primary" name="reg" value="Register" type="submit">Register</button>
									    
								</div>
								</form>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>
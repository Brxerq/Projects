
<?php
error_reporting(0);
session_start();
include('../setting/config.php');
if(!isset($_SESSION['id']))
	{	
header('location:index.php');
}



if(isset($_POST['submit']))
{
	$names=$_POST['names'];
	$uname=$_POST['uname'];
	$Email=$_POST['Email'];
	$pass=$_POST['pass'];
	$mobile=$_POST['mobile'];
	$id=intval($_GET['id']);
$sql=mysqli_query($DBcon,"update users set fullname='$names',username='$uname',email='$Email',password='$pass',PhoneNumber='$mobile' where id='$id'");
$_SESSION['msg']="User details Updated !!";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Edit User ACC</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Edit Account</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<br />

			<form class="form-horizontal row-fluid" name="Category" method="post" >
<?php
$id=intval($_GET['id']);
$query=mysqli_query($DBcon,"select * from users where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>									
<div class="control-group">
<label class="control-label" for="basicinput">Fullname</label>
<div class="controls">
<input type="text" placeholder="Enter Full Name"  name="names" value="<?php echo  htmlentities($row['fullname']);?>" class="span8 tip" required>
</div>

<label class="control-label" for="basicinput">Username</label>
<div class="controls">
<input type="text" placeholder="Enter User Name"  name="uname" value="<?php echo  htmlentities($row['username']);?>" class="span8 tip" required>
</div>

<label class="control-label" for="basicinput">E-mail</label>
<div class="controls">
<input type="text" placeholder="Enter mail address"  name="Email" value="<?php echo  htmlentities($row['email']);?>" class="span8 tip" required>
</div>

<label class="control-label" for="basicinput">Password</label>
<div class="controls">
<input type="text" placeholder="Enter Password"  name="pass" value="<?php echo  htmlentities($row['password']);?>" class="span8 tip" required>
</div>
</div>


<div class="control-group">
											<label class="control-label" for="basicinput">Mobile</label>
											<div class="controls">
												<input  name="mobile" value="<?php echo  htmlentities($row['PhoneNumber']);?>" >
											</div>
										</div>
									<?php } ?>	

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
											</div>
										</div>
									</form>
							</div>
						</div>


						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>

<?php
session_start();
include('../setting/config.php');
if(!isset($_SESSION['id']))
	{	
header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Apprved</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
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
								<h3>Approved Enquiries</h3>
							</div>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

							
								<table border="3">
									<thead style="width: 100%;">
										<tr>
											<th>#</th>
											<th>FName</th>
											<th>LName</th>
											<th>Email /Contact no</th>
											<th>DOB</th>
											<th>Phone</th>
											<th>StreetAddress</th>
											<th>City/Town</th>
											<th>State</th>
											<th>Postcode</th>
											<th>Subject</th>
											<th>product</th>
											<th>comments</th>
											<th>Action</th>
											
										
										</tr>
									</thead>
								
<tbody>
<?php 
$st='Approved';
$query=mysqli_query($DBcon,"SELECT * FROM enquiry where Status='$st'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['FirstName']);?></td>
											<td><?php echo htmlentities($row['LastName']);?></td>
											<td><?php echo htmlentities($row['Email']);?></td>
											<td><?php echo htmlentities($row['DOB']);?></td>
											<td><?php echo htmlentities($row['PhonerNumber']);?></td>
											<td><?php echo htmlentities($row['StreetAddress']);?></td>
											<td><?php echo htmlentities($row['CityTown']);?></td>
											<td><?php echo htmlentities($row['state']);?></td>
											<td><?php echo htmlentities($row['Postcode']);?></td>
											<td><?php echo htmlentities($row['subject']);?></td>
											<td><?php echo htmlentities($row['product']);?></td>
											<td><?php echo htmlentities($row['comments']);?></td>
											<td>  
											<a href="updateEnquiry.php?id=<?php echo $row['id']?>"><i class="icon-edit"></i></a> 
												<a href="todays-enquiry.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a>
											</td>
											</tr>

										<?php $cnt=$cnt+1; } ?>
										</tbody>
								</table>
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
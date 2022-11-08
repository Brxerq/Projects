<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Enquiry Management
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="todays-enquiry.php">
											<i class="icon-tasks"></i>
											Today's Enquiries
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($DBcon,"SELECT * FROM enquiry where DoneON Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="pending-enquiry.php">
											<i class="icon-tasks"></i>
											Pending Enquiries
										<?php	
	$status='Approved';									 
$ret = mysqli_query($DBcon,"SELECT * FROM enquiry where Status!='$status' || Status is null ");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="Approved-Enquiry.php">
											<i class="icon-inbox"></i>
											Approved Enquiries
								<?php	
	$status='Approved';									 
$rt = mysqli_query($DBcon,"SELECT * FROM enquiry where Status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
								</ul>
							</li>
							<br>
							
							<li>
								<a href="change-password.php">
									<i class="menu-icon icon-lock"></i>
									ChaNge password
								</a>
							</li>
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="addUser.php"><i class="menu-icon icon-user"></i> Add User </a></li>
                                <!-- <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Sub Category </a></li>
                                <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insert Product </a></li>
                                <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Manage Products </a></li> -->
                        
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<!-- <li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li> -->
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->

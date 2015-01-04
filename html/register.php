<?php
session_start();
if(isset($_SESSION['userid']))
{
	header('Location: index.php');
	exit;
}

require_once('../includes/helpers.php');?>

<?php     
require_once('db.php');

if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone']))
{	
	$sql="insert into users(name,email, phone, timeofsubmission) values('".$_POST['name']."', '".$_POST['email']."','".$_POST['phone']."', '".time()."')";
	if (mysqli_query($connection, $sql))
	 {
		    $_SESSION['userid'] = mysqli_insert_id($connection);
		    header('Location: index.php');
		    exit;
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}

}
?>



<?php render('header', array('home' => 'class="active"', 'contact'=>'')); ?>


     
		    <div class="inner cover">
		    	<h3 class="cover-heading">Please fill your details to get started</h3><br>
		   		<form id="register" name="register" method="post" action="register.php">
					  <div class="form-group">
					    <label for="exampleInputPassword1">Name</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Phone Number</label>
					    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Number">
					  </div>
		        <p class="lead">
		          <input type="submit" class="btn btn-lg btn-default" name="button" id="button" value="Register" />
		     	</p>
				</div>
	 	



<?php render('footer'); ?>
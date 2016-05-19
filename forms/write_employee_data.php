<?php

	require_once('../config/config.php');
	require_once('../lib/tanner_sid.php');
	include_once('../tanner.php');
?>
<html>
<head>
<style>
	body { padding-left: 10%;
	       padding-right: 10%; 
        }
	.submitted { background-color: grey; padding: 5px; }
	.unsubmitted { background-color: white; padding: 5px; }
</style>
<script>

</script>
</head>
<body>
<?php
	if(empty($_POST["sid"])) {
	//if(!isset($_POST[]) {
//		echo "Not posted. Here's your sid: " . generate_sid();
?>
	<p>Add New Employee</p>
	<form action=".php" method="POST">
	<div class="unsubmitted">	
		<p>Employee SID: <input type="text" name="sid" value=<?php echo generate_sid(); ?>></p>
		<p>First Name: <input type="text" name="fname" ></p>
		<p>Last Name: <input type="text" name="lname" ></p>
		<p>MI: <input type="text" name="mi" ></p>
		<p>Sex: <input type="text" name="sex" ></p>
		<p>DOB (DD-MMM-YYYY): <input type="text" name="dob" ></p>
		<p>Marital Status: <input type="text" name="marital" ></p>

		<input type="submit" value="Add Employee" >
	</div>
	</form>

<?php
   	}
	else {
?>

	<p>Employee Added Successfully</p>
  	<form action="review.php" method="post">
	<div class="submitted">	

		<p>Employee SID: <input type="text" name="sid" value=<?php echo $_POST['sid']; ?>  readonly="readonly" /></p>
		<p>First Name: <input type="text" name="fname" value=<?php echo $_POST['fname']; ?>  readonly="readonly" /></p>
		<p>Last Name: <input type="text" name="lname" value=<?php echo $_POST['lname']; ?>  readonly="readonly" /></p>
		<p>MI: <input type="text" name="mi" value=<?php echo $_POST['mi']; ?>  readonly="readonly" /></p>
		<p>Sex: <input type="text" name="sex" value=<?php echo $_POST['sex']; ?>  readonly="readonly" /></p>
		<p>DOB (DD-MMM-YYYY): <input type="text" name="dob" value=<?php echo $_POST['dob']; ?>  readonly="readonly" /></p>
		<p>Marital Status: <input type="text" name="marital" value=<?php echo $_POST['marital']; ?>  readonly="readonly" /></p>

	</div>
	</form>
</body>
</html>
<?php
	}

?>



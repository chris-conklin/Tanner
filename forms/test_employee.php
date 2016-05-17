<?php

	require_once('../config/config.php');
	require_once('../lib/tanner_sid.php');
	include_once('../tanner.php');
?>
<html>
<head>
<style>
	body { padding: 10%; }
	.fedform { background-color: grey; padding: 15px; }
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
	<form action="test_employee.php" method="POST">
		<p>Employee SID: <input type="text" name="sid" value=<?php echo generate_sid(); ?>></p>
		<p>First Name: <input type="text" name="fname" ></p>
		<p>Last Name: <input type="text" name="lname" ></p>
		<p>MI: <input type="text" name="mi" ></p>
		<p>Sex: <input type="text" name="sex" ></p?
		<p>DOB (DD-MMM-YYYY): <input type="text" name="dob" ></p>
		<p>Marital Status: <input type="text" name="marital" ></p>

		<input type="submit" value="submit" >
	</form>
<?php
   	}
	else {
?>
	<p>Employee Added Successfully</p>
  	<form action="review.php" method="post">
	<div class="fedform">	

		<p>Employee SID: <input type="text" name="sid" value=<?php echo $_POST['sid']; ?> /></p>
		<p>First Name: <input type="text" name="fname" value=<?php echo $_POST['fname']; ?> /></p>
		<p>Last Name: <input type="text" name="lname" value=<?php echo $_POST['lname']; ?> /></p>
		<p>MI: <input type="text" name="mi" value=<?php echo $_POST['mi']; ?> /></p>
		<p>Sex: <input type="text" name="sex" value=<?php echo $_POST['sex']; ?>/></p>
		<p>DOB (DD-MMM-YYYY): <input type="text" name="dob" value=<?php echo $_POST['dob']; ?> /></p>
		<p>Marital Status: <input type="text" name="marital" value=<?php echo $_POST['marital']; ?> /></p>

	</div>
	</form>
</body>
</html>
<?php
	}

?>



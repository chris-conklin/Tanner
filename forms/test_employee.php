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

	<form action="test_employee.php" method="POST">
		<p>Employee SID: <input type="text" name="sid" value=<?php echo generate_sid(); ?> />
		<p>First Name: <input type="text" name="fname" />
		<p>Last Name: <input type="text" name="lname" />
		<p>MI: <input type="text" name="mi" />
		<p>Sex: <input type="text" name="sex" />
		<p>DOB (DD-MMM-YYYY): <input type="text" name="dob" />
		<p>Marital Status: <input type="text" name="marital" />

		<input type="submit" value="submit" />
	</form>
<?php
   	}
	else {
?>

  	<form action="review.php" method="post">
	<div class="fedform">	

		<p>Employee SID: <input type="text" name="sid" value=<?php echo $_POST['sid']; ?> /></p>
		<p>First Name: <input type="text" name="fname" value=<?php echo $_POST['fname']; ?> />
		<p>Last Name: <input type="text" name="lname" value=<?php echo $_POST['lname']; ?>/>
		<p>MI: <input type="text" name="mi" value=<?php echo $_POST['mi']; ?>/>
		<p>Sex: <input type="text" name="sex" value=<?php echo $_POST['sex']; ?>/>
		<p>DOB (DD-MMM-YYYY): <input type="text" name="dob" value=<?php echo $_POST['dob']; ?>/>
		<p>Marital Status: <input type="text" name="marital" value=<?php echo $_POST['marital']; ?>/>

	</div>
	</form>
</body>
</html>
<?php
	}

?>



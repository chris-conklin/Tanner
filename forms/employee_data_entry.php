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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
     /*$("#txtDate").val($.datepicker.formatDate('dd M yy', new Date()));


    $( "#datepicker" ).datepicker(formatDate('dd M yy', new Date()));

$.datepicker.formatte").val($.datepicker.formatDate('dd M yy', new Date()));
    Date( "yy-mm-dd", new Date( 2007, 1 - 1, 26 ) );
    $( "#datepicker" ).datepicker();

*/  
  $( "#datepicker" ).datepicker();

  });
  </script>
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
<p>Date: <input type="text" id="datepicker"></p>
		<p>DOB (YYYY-MM-DD): <input type="text" name="dob" ></p>
		<p>Marital Status: <input type="text" name="marital" ></p>

		<input type="submit" value="Add Employee" >
	</div>
	</form>

<?php
   	}
	else {
        $sql = "INSERT INTO `Tanner_dev`.`EMPBASE` (`empbase_sid`, `empbase_dob`, `empbase_ssn`, `empbase_id`, `empbase_effective_date`, `empbase_source`) VALUES (\'480FDD\', \'2013-01-16\', \'475-68-0011\', \'800484661\', CURRENT_TIMESTAMP, \'MANUAL\');";

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



<?php
	include '../database/connection.php';
	session_start();
	if($_SESSION['user']){
	$emailid = $_SESSION['user'];

	$sql = "SELECT * FROM user WHERE Email = '$emailid'";
    $result = mysqli_query($conn, $sql);
	$record = array();
    
    while($row = mysqli_fetch_assoc($result)){
          $record[] = $row;
	  }
	  foreach($record as $rec){
		$correct = $rec['Correct'];
		$incorrect = $rec['Wrong'];
		$points = $rec['Points'];
	  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test Completed</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg01.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg02.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg03.jpg');"></div>
	</div>

	<div class="size1 overlay1">
		<div class="size1 flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
			<h3 class="l1-txt1 txt-center p-b-25">
				THANK YOU FOR PARTICIPATION
			</h3>
	  		<p style="color:white; padding-bottom: 20px">RESULT OF <span style="font-size:25px"><?php echo $emailid ?></span></p>
			<div class="flex-w flex-c-m cd100 p-b-33">
				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1"><?php echo $correct ?></span>
					<span class="s2-txt1">Correct</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1"><?php echo $incorrect?></span>
					<span class="s2-txt1">Wrong</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1"><?php echo $points?></span>
					<span class="s2-txt1">Points</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1">100</span>
					<span class="s2-txt1">Out of</span>
				</div>
			</div>
			<a href='leaderboard.php' style='text-decoration:none;'><button type="button" class="btn btn-primary">Leaderboard</button></a>
		</div>
	</div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

</body>
</html>
<?php 
	session_unset();}else{
		header('Location: ../login/index.php');
	}
?>
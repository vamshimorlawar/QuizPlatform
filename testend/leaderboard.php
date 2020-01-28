<?php 
    include '../database/connection.php';
    session_start();

	$sql = "SELECT * FROM user ORDER BY Points DESC";
    $result = mysqli_query($conn, $sql);
	$record = array();
    
    while($row = mysqli_fetch_assoc($result)){
          $record[] = $row;
	  }?>
      <!DOCTYPE html>
<html lang="en">
<head>
  <title>Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container">
            <h2 style="margin-top:6%; text-align:center">LEADERBOARD</h2><br>
            <p></p>            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Correctly Answered</th>
                        <th>Points</th>
                    </tr>
                </thead>
                <tbody>
    <?php
	    foreach($record as $rec){
            $email = $rec['Email'];
            $correct = $rec['Correct'];
            $points = $rec['Points'];
    ?>
                    <tr>    
                        <td><?php echo $email; ?></td>
                        <td><?php echo $correct; ?></td>
                        <td><?php echo $points; ?></td>
                    </tr> 
    <?php 
        }
    ?>
                </tbody>
            </table>
        </div>
</body>
</html>
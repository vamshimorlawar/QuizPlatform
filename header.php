<?php 
  include 'database/connection.php';
  $sql = "SELECT * FROM questions ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  $record = array();
    while($row = mysqli_fetch_assoc($result)){
          $record[] = $row;
      }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aptitude Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/testend/images/icons/favicon.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

<script>

var oldDateObj = new Date();
var countDownDate = new Date();
countDownDate.setTime(oldDateObj.getTime() + (30 * 60 * 1000));
// Set the date we're counting down to
//var countDownDate = new Date("Jan 28, 2020 13:57:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = "Time Left: "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "<marquee>Time Up!</marquee>";
    alert('Time Up! We will submit your test.');
    document.getElementById("submitround1").click();
  }
}, 1000);
</script>
<style>
  #questions{
    -webkit-user-select: none; /* Safari 3.1+ */
    -moz-user-select: none; /* Firefox 2+ */
    -ms-user-select: none; /* IE 10+ */
    user-select: none;
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" >
  <a class="navbar-brand" href="#"><?php echo $_SESSION['user']?></a>
  <a class="navbar-brand" id="demo" style='color:white;'></a>
  <!-- <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
  </ul> -->
</nav>

<div class="container mt-3" style='padding-top: 80px;'>
  <h2>Round 1</h2><br>

<?php 
    include 'database/connection.php';
    session_start();
    $email = $_SESSION['user'];
    $total = 20;
    $points = 0;
    $correct = 0;
    $incorrect = 0;
    
    $sql = "SELECT * FROM questions";
    $result = mysqli_query($conn, $sql);
    $record = array();
    $submitted = array();
    while($row = mysqli_fetch_assoc($result)){
          $record[] = $row;
      }
    
    if(isset($_POST['round1'])){
        foreach($record as $rec){
            $submitted = $_POST[$rec['Id']];
            if($submitted == $rec['Answer']){
                $correct += 1;
            }
        }
        $incorrect = $total - $correct;
        $points = $correct*5;
        
        $sql = "UPDATE user SET Correct = '$correct', Wrong = '$incorrect', Points = '$points' WHERE Email = '$email' ";
        $result = mysqli_query($conn, $sql);
    }
    header('Location:testend/index.php');
?>
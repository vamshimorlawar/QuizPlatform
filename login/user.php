<?php
    session_start();
    include '../database/connection.php';

    if(isset($_POST['starttest'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        // $time = date("h:i:sa");
        if($pass == 'placed'){
            $_SESSION['user'] = $email;
            $sql = "SELECT * FROM user WHERE Email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($result);
            if(!$rows){
                $sql = "INSERT INTO user (Email, Correct, Wrong, Points) VALUES ('$email','0', '0', '0')";
                $result = mysqli_query($conn, $sql);
                header('refresh:2; url=../question.php');
            }else{
                echo 'You have already given the test. Redirecting to leaderboard in 3s... ';
                header('refresh:2; url=../testend/leaderboard.php');
            }
            
        }else{
            echo 'Wrong Password. Redirecting to login page in 3s...';
            header('refresh:2; url=index.php');
        }
    }
?>
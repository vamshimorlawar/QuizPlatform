<?php
  session_start();
  if(!$_SESSION['user']){
    header('Location: login/index.php');
  }else{
  include 'header.php';
  
foreach($record as $rec){?>
  <form action="calculation.php" method="POST" id='questions'>
    <p><strong><?php echo $rec['Question'] ?></strong></p>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="1<?php echo $rec['Id'] ?>" name="<?php echo $rec['Id'] ?>" value="<?php echo $rec['Option1'] ?>">
      <label class="custom-control-label" for="1<?php echo $rec['Id'] ?>"><?php echo $rec['Option1'] ?></label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="2<?php echo $rec['Id'] ?>" name="<?php echo $rec['Id'] ?>" value="<?php echo $rec['Option2'] ?>">
      <label class="custom-control-label" for="2<?php echo $rec['Id'] ?>"><?php echo $rec['Option2'] ?></label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="3<?php echo $rec['Id'] ?>" name="<?php echo $rec['Id'] ?>" value="<?php echo $rec['Option3'] ?>">
      <label class="custom-control-label" for="3<?php echo $rec['Id'] ?>"><?php echo $rec['Option3'] ?></label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="4<?php echo $rec['Id'] ?>" name="<?php echo $rec['Id'] ?>" value="<?php echo $rec['Option4'] ?>">
      <label class="custom-control-label" for="4<?php echo $rec['Id'] ?>"><?php echo $rec['Option4'] ?></label>
    </div>
    
    <br>
<?php }?>
    <button type="submit" name='round1' id='submitround1' class="btn btn-primary">Submit</button>
  </form>
</div>
<div style='padding:20px'></div>
</body>
</html>
<?php } ?>
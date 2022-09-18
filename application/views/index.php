<?php include('header.php'); ?>

    <div class = "form-display">
    <?php echo form_open('home/index'); ?>

  <div class="form-group mb-3">
  
    <label for="exampleInputEmail1">Enter Username</label>
  <?php  echo form_input(['placeholder' => 'Enter Username','name' => 'username', 'class' => 'form-control mt-1']); ?>
  </div>
  <div class="form-group mb-3">
  
    <label for="exampleInputPassword1">Enter Password</label>
    <?php  echo form_password('password', '', ['placeholder' => 'Enter Password', 'class' => 'form-control mt-1'], 'email'); ?>
  </div>
 
 <?php echo form_submit('login', 'Login', ['class' => 'btn btn-primary login-btn']); ?>
</form>
</div>
</body>
</html>

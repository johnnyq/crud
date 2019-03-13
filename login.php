<?php 
	session_start();
	include "config.php";
	include "includes/header.php"; 
    
  if(isset($_POST['login'])){

      $email = mysqli_real_escape_string($mysqli,$_POST['email']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']);

      $sql = mysqli_query($mysqli,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");
      
      if(mysqli_num_rows($sql) == 1){
          $row = mysqli_fetch_array($sql);
          session_start();
          $_SESSION['logged'] = TRUE;
          $_SESSION['user_id'] = $row['user_id'];
          header("Location: index.php");
      }else{
          $response = "<div class='alert alert-warning'><strong>Invalid username or password.</strong><button class='close' data-dismiss='alert'>&times;</button></div>";
      }
  }

?>	

<div class="row">
  <div class="col-md-offet-3 col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><?php echo "$config_app_name"; ?></h2>
      </div>
      <div class="panel-body">
        <?php 
        
          if(isset($response)){
            echo "$response";
          }
        
        ?>
        <form class="form-horizontal" autocomplete="off" method="post">
          <div class="form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon input-lg"><span class="glyphicon glyphicon-user"></span></span>
                <input type="email" class="form-control input-lg" name="email" placeholder="Email" required autofocus>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon input-lg"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" class="form-control input-lg" name="password" placeholder="Password">
              </div>
              <br>
              <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>
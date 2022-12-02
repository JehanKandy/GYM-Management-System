<?php 
    include("../layouts/header.php");
    include("../function/function.php");

    if(empty($_SESSION['passReset'])){
		header("location:login.php");
	}
?>

<link rel="stylesheet" href="../css/style.css">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand text-white" href="#">GYM Workout</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="../../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../../docs/about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../../docs/shop.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<div class="register">
    <div class="container">
        <div class="login-content">
            <div class="login-box">
                <div class="title"><i class="fas fa-user-plus"></i>&nbsp; Update Password</div>
                <div class="body">
                    <?php 
                        if(isset($_POST['pass_update'])){
                            $result = update_pass($_POST['new_username'],$_POST['new_email'],md5($_POST['new_pass']),md5($_POST['new_cpass']));
                        }

                    
                    ?>
                    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
                        <p class="form-text">Username : </p>
                        <input type="text" name="new_username" class="form-input" id="usernamenew" placeholder="Enter Username">
                        <br><br> 
                        <p class="form-text">Email : </p>
                        <input type="email" name="new_email" class="form-input" id="emailnew" placeholder="Enter Email">
                        <br><br>      
                        <p class="form-text">New Password : </p>
                        <input type="password" name="new_pass" class="form-input" id="passnew" placeholder="New Password">
                        <br><br>  
                        <p class="form-text">Confarm New Password : </p>
                        <input type="password" name="new_cpass" class="form-input" id="cpassnew" placeholder="Confarm New Password">
                        <br><br>
                        <input type="submit" value="Update Password" name="pass_update" class="login-btn">
                    </form>
                    <hr>
                    <p class="bottom-by"><i class="far fa-copyright"></i>By Maneesha</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
    include("../layouts/footer1.php")    
?>

<script src="../../js/script.js"></script>

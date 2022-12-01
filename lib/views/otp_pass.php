<?php 
    include("../layouts/header.php");
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


<div class="login">
    <div class="container">
        <div class="login-content">
            <div class="login-box">
                <div class="title"><i class="fas fa-key"></i>&nbsp; Password Reset</div>
                <div class="body">
                  <?php 
                    include("../function/function.php");
                    if(isset($_POST['otp_check'])){
                        $reuslt = otp_check($_POST['otp_num']);
                        echo $reuslt;
                    }

                  ?>
                    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
                        <p class="form-text">Enter OTP : </p>
                        <input type="number" name="otp_num" class="form-input" id="otpNum" placeholder="Enter OTP">
                        <br><br>
                        <input type="submit" value="Verify OTP" name="otp_check" class="login-btn">                        
                    </form>
                    <hr>
                    <p>Enter One Time Password (OTP) that you rescued by email</p>


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

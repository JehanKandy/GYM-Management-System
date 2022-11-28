<?php 
    include("../layouts/header.php");
?>

<link rel="stylesheet" href="../css/style.css">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand text-primary" href="#">GYM Workout</a>
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
              <a class="nav-link text-primary" href="../../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="../../docs/about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="../../docs/shop.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container">
    <div class="login">
        <div class="title"><i class="fas fa-user-alt"></i>Login Here</div>
    </div>
</div>

<?php 
    include("../layouts/footer1.php")    
?>

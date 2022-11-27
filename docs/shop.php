<?php 
    include("../lib/layouts/header.php");
?>

<link rel="stylesheet" href="../css/style.css">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand text-warning" href="#">GYM Workout</a>
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
              <a class="nav-link text-warning" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="shop.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<div class="shopping">
    <div class="title">
        Shopping
    </div>
</div>

<div class="shop-content">
    <div class="product-title">Supplements</div>
    <div class="product-content">
        <div class="p-grid">
            <div class="p-item1">item1</div>
            <div class="p-item2">item1</div>
            <div class="p-item3">item1</div>
            <div class="p-item4">item1</div>
        </div>
    </div>

    <div class="product-title">GYM Equipment</div>
</div>

<?php
    include("../lib/layouts/footer_home.php");
?>

<script src="../js/script.js"></script>

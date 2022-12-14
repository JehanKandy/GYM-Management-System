<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>



<div class="app">
	<div class="menu-toggle">
		<div class="hamburger">
			<span></span>
		</div>
	</div>

	<aside class="sidebar">
		<nav class="menu">
			<?php //profile_img();?>
			<p class="profile-name"><?php //user_id_loged();?></p>
			<a href="admin.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="members.php" class="menu-item"><i class="fas fa-user-alt"></i>Members &nbsp; <span class="count"><?php count_members(); ?></span></a>
			<a href="admins.php" class="menu-item"><i class="fas fa-user-tie"></i>Admin  &nbsp; <span class="count"><?php count_admins(); ?></span></a>
			<a href="products.php" class="menu-item"><i class="fas fa-gifts"></i>Prodcuts  &nbsp; <span class="count"><?php count_products(); ?></span></a>
            <a href="plans.php" class="menu-item"><i class="fas fa-book-reader"></i>Plans  &nbsp; <span class="count"><?php count_plans(); ?></span></a>
			<a href="my_account.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>
		
	</aside>

	<main class="content">
		<h1>Welcome, To Admin Dashboard</h1>
		<hr>
		<div class="admin-content">
			<div class="grid">
				<div class="admin-item1">
					<div class="admin-title">
						<i class="fas fa-user-alt"></i> &nbsp;  Members<br>
					</div>
					<hr class="std-hr">
					<div class="admin-body">
						<?php count_members(); ?>
					</div>
				</div>
				<div class="admin-item2">
					<div class="admin-title">
						<i class="fas fa-user-tie"></i> &nbsp;  Admins<br>
					</div>
					<hr class="tea-hr">
					<div class="admin-body">
						<?php count_admins(); ?>
					</div>
				</div>
				<div class="admin-item3">
					<div class="admin-title">
						<i class="fas fa-gifts"></i> &nbsp;  Products<br>
					</div>
					<hr class="admin-hr">
					<div class="admin-body">
						<?php count_products(); ?>
					</div>
				</div>
				<div class="admin-item4">
					<div class="admin-title">
						<i class="fas fa-book-reader"></i> &nbsp;  Plans<br>
					</div>
					<hr class="qui-hr">
					<div class="admin-body">
						15
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<script src="../../js/script.js"></script>

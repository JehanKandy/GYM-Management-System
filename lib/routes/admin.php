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
			<a href="admin/members.php" class="menu-item"><i class="fas fa-user-alt"></i>Members &nbsp; <span class="pending">15</span></a>
			<a href="admin/admins.php" class="menu-item"><i class="fas fa-user-tie"></i>Admin  &nbsp; <span class="pending">15</span></a></a>
			<a href="admin/products.php" class="menu-item"><i class="fas fa-gifts"></i>Prodcuts  &nbsp; <span class="pending">15</span></a></a>
            <a href="admin/plans.php" class="menu-item"><i class="fas fa-book-reader"></i>Plans  &nbsp; <span class="pending">15</span></a></a>
			<a href="admin/my_account_admin.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>
		
	</aside>

	<main class="content">
		<h1>Welcome, To Admin Dashboard</h1>
		<hr>
		<div class="admin-content">
			<div class="grid">
				<div class="admin-item1">
					<div class="admin-title">
						<i class="fas fa-user-graduate"></i> &nbsp;  Students<br>
					</div>
					<hr class="std-hr">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item2">
					<div class="admin-title">
						<i class="fas fa-chalkboard-teacher"></i> &nbsp;  Teachers<br>
					</div>
					<hr class="tea-hr">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item3">
					<div class="admin-title">
						<i class="fas fa-user-tie"></i> &nbsp;  Admins<br>
					</div>
					<hr class="admin-hr">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item4">
					<div class="admin-title">
						<i class="fas fa-question-circle"></i> &nbsp;  Quizzes<br>
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

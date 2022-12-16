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
			<?php profile_img();?>
			<p class="profile-name"><?php user_id_loged();?></p>
			<a href="admin.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="members.php" class="menu-item"><i class="fas fa-user-alt"></i>Members &nbsp; <span class="count"><?php count_members(); ?></span></a>
			<a href="admins.php" class="menu-item"><i class="fas fa-user-tie"></i>Admin  &nbsp; <span class="count"><?php count_admins(); ?></span></a>
			<a href="products.php" class="menu-item"><i class="fas fa-gifts"></i>Prodcuts  &nbsp; <span class="count"><?php count_products(); ?></span></a>
            <a href="plans.php" class="menu-item"><i class="fas fa-book-reader"></i>Plans  &nbsp; <span class="count"><?php count_plans(); ?></span></a>
			<a href="my_account_admin.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>
		
	</aside>

	<main class="content">
		<h1>Products</h1>
		<hr>
		<span>
			<a href="add_plan.php"><button class="btn btn-success"><i class="fas fa-plus"></i>&nbsp;Add Plan</button></a>
		</span>
		<table class="student-tbl">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Plan</th>
					<th scope="col">20% Completed</th>
					<th scope="col">40% Completed</th>
					<th scope="col">60% Completed</th>
					<th scope="col">80% Completed</th>
					<th scope="col">100% Completed</th>
					<th scope="col">Status</th>
					<th scope="col">Add Date</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<?php all_plans(); ?>
			</tbody>
		</table>

	</main>
</div>

<script src="../../js/script.js"></script>

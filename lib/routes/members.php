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
			<a href="members.php" class="menu-item"><i class="fas fa-user-alt"></i>Members &nbsp; <span class="pending">15</span></a>
			<a href="admins.php" class="menu-item"><i class="fas fa-user-tie"></i>Admin  &nbsp; <span class="pending">15</span></a></a>
			<a href="products.php" class="menu-item"><i class="fas fa-gifts"></i>Prodcuts  &nbsp; <span class="pending">15</span></a></a>
            <a href="plans.php" class="menu-item"><i class="fas fa-book-reader"></i>Plans  &nbsp; <span class="pending">15</span></a></a>
			<a href="my_account.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>
		
	</aside>

	<main class="content">
		<h1>All Members</h1>
		<hr>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Username</th>
					<th scope="col">Email</th>
					<th scope="col">First Name</th>
					<th scope="col">NIC</th>
					<th scope="col">Status</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Jehan</td>
					<td>jehan"123</td>
					<td>Jehan</td>
					<td>20010540602233</td>
					<td><h class="badge badge-success">Active</h></td>
					<td><button class="btn btn-primary">info</button></td>
				</tr>
				<tr>
					<th scope="row">1</th>
					<td>Jehan</td>
					<td>jehan"123</td>
					<td>Jehan</td>
					<td>20010540602233</td>
					<td><h class="badge badge-success">Active</h></td>
					<td><button class="btn btn-primary">info</button></td>
				</tr>
				<tr>
					<th scope="row">1</th>
					<td>Jehan</td>
					<td>jehan"123</td>
					<td>Jehan</td>
					<td>20010540602233</td>
					<td><h class="badge badge-success">Active</h></td>
					<td><button class="btn btn-primary">info</button></td>
				</tr>
			</tbody>
		</table>
	</main>
</div>

<script src="../../js/script.js"></script>

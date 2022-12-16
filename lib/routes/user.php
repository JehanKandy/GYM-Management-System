<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_users.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<div class="container">
    <div class="user-dashboard">
        <span>
            <a href=""><button class="btn btn-primary"><i class="fas fa-gifts"></i>&nbsp;Prodcuts</button></a>
            <a href=""><button class="btn btn-primary"><i class="fas fa-book-reader"></i>&nbsp;Plans</button></a>
        </span>

        <br><hr><br>
        <?php profile_info(); ?>
    </div>
</div>

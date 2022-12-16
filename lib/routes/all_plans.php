<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<div class="container">
    <div class="all-plans">
        <?php all_product_back_btn(); ?>
        <div class="p-grid">
            <?php all_products_view(); ?>
        </div>
    </div>
</div>

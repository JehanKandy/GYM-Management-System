<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    if(isset($_POST['update_product_info'])){

    }
    if(isset($_POST['product_status_deactive'])){

    }
    if(isset($_POST['product_status_active'])){
        
    }

?>

<div class="container">
    <div class="edit-product">
        <?php update_product(); ?>
    </div>
</div>

<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    if(isset($_POST['product_img_update'])){
        $result = update_product_image($_FILES['file']['name']);
        echo $result;
    }
?>


<div class="container">
    <div class="update-img-product">
        <?php update_product_img(); ?>
    </div>
</div>

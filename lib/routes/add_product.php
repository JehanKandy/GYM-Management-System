<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>


<div class="container">
    <div class="add-product-content">
        <div class="title">Add Product</div>
        <div class="body">
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
        
        
            </form>
        </div>
    </div>
</div>

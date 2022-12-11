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
        $result = update_product_data($_POST['update_pname'], $_POST['update_pprice'], $_POST['update_pqty'], $_POST['update_pstock']);
        echo $result;
    }
    if(isset($_POST['product_status_deactive'])){
        $result = product_deactive($_POST['product_deactive']);
        echo $result;
    }
    if(isset($_POST['product_status_active'])){

    }

?>

<div class="container">
    <div class="edit-product">
        <?php update_product(); ?>
    </div>
</div>

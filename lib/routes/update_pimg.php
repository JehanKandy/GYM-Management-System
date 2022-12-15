<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    if(isset($_POST['profile_img_update'])){
        $result = update_product_image($_FILES['images']['name']);
        echo $result;
    }
?>


<div class="container">
    <div class="update-user-profile-img">
        <?php update_profile_img(); ?>
    </div>
</div>

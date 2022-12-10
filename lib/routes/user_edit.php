<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>


<?php 
    if(isset($_POST['user_to_deactive'])){

    }
    elseif(isset($_POST['user_to_active'])){

    }

?>

<div class="container">
    <div class="user-edit-content">
        <div class="title">
            <?php get_user_data_edit(); ?>
        </div>        
    </div>
</div>

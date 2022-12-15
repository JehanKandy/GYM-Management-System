<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    if(isset($_POST['update_profile_info'])){
        $result = data_update_profile();
        echo $result;
    }

?>

<div class="container">
    <div class="update-profile-info">
        <?php update_profile_data(); ?>
    </div>
</div>

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
        $result = data_update_profile($_POST['update_username'], $_POST['update_fname'], $_POST['update_lname'], $_POST['update_email'], $_POST['update_address'], $_POST['update_dob'], $_POST['update_nic'], $_POST['update_mobile']);
        echo $result;
    }
?>

<div class="container">
    <div class="update-profile-info">
        <?php update_profile_data(); ?>
    </div>
</div>

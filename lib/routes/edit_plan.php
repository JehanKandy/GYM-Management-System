<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    if(isset($_POST['update_plan_data'])){
        $result = update_plan_infor($_POST['update_plan_name']);
        echo $result;
    }
    if(isset($_POST['deactive_place_data'])){
        
    }
    if(isset($_POST['active_place_data'])){
        
    }

?>


<div class="container">
    <div class="edit-plan">
        <?php edit_plan(); ?>
    </div>
</div>

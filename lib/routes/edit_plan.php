<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    if(isset($_POST[''])){

    }
    if(isset($_POST[''])){
        
    }
    if(isset($_POST[''])){
        
    }

?>


<div class="container">
    <div class="edit-plan">
        <?php edit_plan(); ?>
    </div>
</div>

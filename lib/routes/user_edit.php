<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<?php 
    $id = $_GET['id'];
?>
<div class="container">
    <div class="user-edit-content">
        <div class="title">
            <?php echo $id; ?>
        </div>        
    </div>
</div>

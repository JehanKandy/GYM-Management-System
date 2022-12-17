<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>


<?php 
    if(isset($_POST['up20'])){
        $result = update_20p($_POST['u20p']);
        echo $result;
    }

?>

<div class="container">
    <div class="my-plan-view">
        <?php view_activities_my_plan(); ?>
    </div>
</div>

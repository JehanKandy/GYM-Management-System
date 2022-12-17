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
    if(isset($_POST['up40'])){
        $result = update_40p($_POST['u40p']);
        echo $result;
    }
    if(isset($_POST['up60'])){
        $result = update_60p($_POST['u60p']);
        echo $result;
    }
    if(isset($_POST['up80'])){
        $result = update_80p($_POST['u80p']);
        echo $result;
    }
    if(isset($_POST['up100'])){
        $result = update_100p($_POST['u100p']);
        echo $result;
    }

?>

<div class="container">
    <div class="my-plan-view">
        <?php view_activities_my_plan(); ?>
    </div>
</div>

<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_users.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<div class="container">
    <div class="user-dashboard">
        <span>
            <a href="all_product.php"><button class="btn btn-primary"><i class="fas fa-gifts"></i>&nbsp;Prodcuts</button></a>
            <a href="all_plans.php"><button class="btn btn-primary"><i class="fas fa-book-reader"></i>&nbsp;Plans</button></a>
        </span>

            <?php 
                if(isset($_POST['plan_complete'])){
                    $result = plan_complete_user($_POST['complete_plan']);
                    echo $result;
                }
            
            ?>

        <br><hr><br>
        <?php plan_data();?>
        <br><hr><br>
        <?php profile_info(); ?>
    </div>
</div>

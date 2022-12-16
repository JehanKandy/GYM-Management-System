<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="../../css/style.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<div class="container">
    <div class="all-plans">
        <?php 
            if(isset($_POST['active_a_plan'])){
                $result = active_plan_user($_POST['active_plan_user_id'], $_POST['plan_name']);
                echo $result;
            }
        
        ?>

        <?php all_product_back_btn(); ?>
        <div class="p-grid">
            <?php all_plans_view(); ?>
        </div>
    </div>
</div>

<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>



<div class="container">
    <div class="add-plan">
        <?php 
            if(isset($_POST['add_plan'])){
                $result = add_plan($_POST['plan_name']);
                echo $result;
            }

        ?>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
            <span>
                Plan Name : 
                <input type="text" name="plan_name" id="" class="form-control" placeholder="Plan Name">

                <br><br>
                <input type="submit" value="Add Plan" name="add_plan" class="btn btn-success">
            </span>
        </form>
        <br><br><br>
        <a href="plans.php"><button class="btn btn-primary">Back</button></a>
    </div>
</div>

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
                <input type="text" name="plan_name" id="" class="form-control" placeholder="Plan Name"><br>
                20% Completed : 
                <input type="text" name="plan_name" id="" class="form-control" placeholder="20% Completed"><br>
                40% Completed  : 
                <input type="text" name="plan_name" id="" class="form-control" placeholder="40% Completed"><br>
                60% Completed  : 
                <input type="text" name="plan_name" id="" class="form-control" placeholder="60% Completed"><br>
                80% Completed  : 
                <input type="text" name="plan_name" id="" class="form-control" placeholder="80% Completed"><br>
                100% Completed  : 
                <input type="text" name="plan_name" id="" class="form-control" placeholder="100% Completed"><br>

                <br><br>
                <input type="submit" value="Add Plan" name="add_plan" class="btn btn-success">
            </span>
        </form>
        <br><br><br>
        <a href="plans.php"><button class="btn btn-primary">Back</button></a>
    </div>
</div>

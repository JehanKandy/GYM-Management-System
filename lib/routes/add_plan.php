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
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
            <span>
                Plan Name : 
                <input type="text" name="plan_name" id="" class="form-control" placeholder="Plan Name">

                <br><br>
                <input type="submit" value="Add Plan" name="add_plan" class="btn btn-success">
            </span>
        </form>
    </div>
</div>

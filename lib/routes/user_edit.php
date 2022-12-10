<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>


<?php 
    if(isset($_POST['user_to_deactive'])){
        $result = to_deactive_user($_POST['to_deactive']);
        echo $result;
    }
    elseif(isset($_POST['user_to_active'])){
        $result = to_active_user($_POST['to_active']);
        echo $result;
    }
    elseif(isset($_POST['user_not_to_pending'])){
        $result = not_to_pending($_POST['user_not_to_pending']);
        echo $result;
    }
    elseif(isset($_POST['user_to_pending'])){
        $result = to_pending($_POST['not_pending']);
        echo $result;
    }

?>

<div class="container">
    <div class="user-edit-content">
        <div class="title">
            <?php get_user_data_edit(); ?>
        </div>        
    </div>
</div>

<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="../../css/style.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>

<div class="shop-content">
    <div class="product-content">
        <div class="p-grid">
            <div class="p-item1">
                <center><img src="../images/supp1.jfif" alt="" class="supp-img"></center>
                <div class="p-infor">
                    <div class="p-name">ABC Prodcuts</div>
                    <div class="qty">1</div>
                    <div class="p-price">Rs 15,000.00</div>
                </div>
            </div>
            
            <div class="p-item2">
                <center><img src="../images/supp1.jfif" alt="" class="supp-img"></center>
                <div class="p-infor">
                        <div class="p-name">ABC Prodcuts</div>
                        <div class="qty">1</div>
                        <div class="p-price">Rs 15,000.00</div>
                </div>
            </div>
            <div class="p-item3">
                <center><img src="../images/supp1.jfif" alt="" class="supp-img"></center>
                <div class="p-infor">
                        <div class="p-name">ABC Prodcuts</div>
                        <div class="qty">1</div>
                        <div class="p-price">Rs 15,000.00</div>
                </div>
            </div>
            <div class="p-item4">
                <center><img src="../images/supp1.jfif" alt="" class="supp-img"></center>
                <div class="p-infor">
                        <div class="p-name">ABC Prodcuts</div>
                        <div class="qty">1</div>
                        <div class="p-price">Rs 15,000.00</div>
                 </div>
            </div>
        </div>
    </div>

<link rel="stylesheet" href="../../css/dashboard.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged_user.php";?>

<?php 
    if(empty($_SESSION['LoginSession'])){
        header("location:../views/login.php");
    }
?>


<div class="container">
    <div class="add-product-content">
        <div class="title">Add Product</div>
        <div class="body">
            <?php 
                if(isset($_POST['add_prodcut'])){
                    $result = add_product($_POST['product_name'], $_POST['product_price'], $_POST['product_qty'], $_POST['product_stock'], $_POST['p_desc']);
                    echo $result;
                }            
            ?>
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="product-add-grid">                    
                    <div class="item-add1">                        
                        <span>
                            Product Name : 
                            <input type="text" name="product_name" id="productName" class="form-control">
                        </span>
                    </div>
                    <div class="item-add2">
                        <span>
                            Product Price : 
                            <input type="number" name="product_price" id="productPrice" class="form-control">
                        </span>
                    </div>
                    <div class="item-add3">
                        <span>
                            Product Qty : 
                            <input type="text" name="product_qty" id="productQty" class="form-control">
                        </span>
                    </div>
                    <div class="item-add4">
                        <span>
                            Product Stock : 
                            <input type="text" name="product_stock" id="productStock" class="form-control">
                        </span>
                    </div>
                    <div class="item-add6">
                        <input type="submit" value="Add Prodcuct" name='add_prodcut' class="btn btn-success btn-lg btn-block">
                    </div>
                </div>        
            </form>
            <a href="products.php"><button class="btn btn-primary btn-lg btn-block" style="margin-top: 20px;">Back</button></a>
        </div>
    </div>
</div>

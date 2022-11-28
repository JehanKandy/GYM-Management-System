<?php 
    include("config.php");
    use FTP\Connection;
    

    function subsucribe_user($email){
        $con = Connection();

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return  "Email Not";
        }

        $check_sub_user = "SELECT * FROM geting_touch_tbl WHERE g_email = '$email'";
        $check_sub_user_result = mysqli_query($con, $check_sub_user);
        $sub_nor = mysqli_num_rows($check_sub_user_result); 


    }
?>

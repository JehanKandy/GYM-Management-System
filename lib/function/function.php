<?php 
    include("config.php");
    session_start();
    use FTP\Connection;
    

    function subsucribe_user($email){
        $con = Connection();

        $check_sub_user = "SELECT * FROM geting_touch_tbl WHERE email = '$email'";
        $check_sub_user_result = mysqli_query($con, $check_sub_user);
        $check_sub_user_nor = mysqli_num_rows($check_sub_user_result);

    }
?>

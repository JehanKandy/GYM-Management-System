<?php 
    include("config.php");
    session_start();
    use FTP\Connection;
    

    function subsucribe_user($email){
        $con = Connection();

        $check_sub_user = "SELECT * FROM geting_touch_tbl WHERE email = '$email'";
    }
?>

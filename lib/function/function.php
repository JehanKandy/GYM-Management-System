<?php 
    include("config.php");
    use FTP\Connection;
    

    function subsucribe_user($email){
        $con = Connection();

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email Error</strong> &nbsp; Check Again Your Email
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }else{
            $check_sub_user = "SELECT * FROM geting_touch_tbl WHERE g_email = '$email'";
            $check_sub_user_result = mysqli_query($con, $check_sub_user);
            $sub_nor = mysqli_num_rows($check_sub_user_result); 

            if($sub_nor > 0){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error</strong> &nbsp; Email Already Exists...!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            }
            else{
                $insert_email_g = "INSERT INTO geting_touch_tbl(g_email,date_time)VALUES('$email',NOW())";
                $insert_email_g_result = mysqli_query($con, $insert_email_g);
            }
        }
    }
?>

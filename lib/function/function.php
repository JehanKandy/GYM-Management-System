<?php 
    include("config.php");
    use FTP\Connection;


    session_start();

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

                if(!$insert_email_g_result){
                    return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Error</strong> &nbsp; While insert data in to Database
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                }else{
                    return  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Success</strong> &nbsp; Data Insert to DataBase Successfully...!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                }
            }
        }
    }


    function reg_user($username, $email, $pass1, $cpass){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE u_username = '$username' && user_email = '$email'";
        $check_user_result = mysqli_query($con, $check_user);
        $check_user_nor = mysqli_num_rows($check_user_result);

        if(empty($username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Username Error : </strong> &nbsp; Username Cannot be Empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(empty($email)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Email Error : </strong> &nbsp; Email Cannot be Empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Email Error</strong> &nbsp; Check Again Your Email
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(empty($pass1)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password Error : </strong> &nbsp; Email Cannot be Empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(empty($cpass)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password Error : </strong> &nbsp; Email Cannot be Empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if($pass1 != $cpass){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password Error : </strong> &nbsp; Password and Confarm Password doesn't match.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }

        if($check_user_nor > 0){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>User Error : </strong> &nbsp; Email Cannot be Empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }else{
            $insert_user = "INSERT INTO user_tbl(u_username,user_email,user_pass,user_type,join_date,user_status,is_pending)VALUES('$username','$email','$pass1','user',NOW(),0,1)";
            $insert_user_result = mysqli_query($con, $insert_user);

            if(!$insert_user_result){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Error : </strong> &nbsp; While insert data in to Database.....!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
            }else{
                return  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Success</strong> &nbsp; User Created Syccessflly..! <br>
                            <a href='../views/login.php'>Login To account</a>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
            }
        }
    }

    function login_user($login_username,$login_pass){
        $con = Connection();

        if(empty($login_username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Username Error : </strong> &nbsp; Username Cannot be Empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(empty($login_pass)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password Error : </strong> &nbsp; Password Cannot be Empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>"; 
        }

        $check_user = "SELECT * FROM user_tbl WHERE u_username = '$login_username' && user_pass = '$login_pass'";
        $check_user_result = mysqli_query($con, $check_user); 
        $check_user_row = mysqli_fetch_assoc($check_user_result);

        $_SESSION['getEmail'] = $login_username;


        if($login_username != $check_user_row['u_username']){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error : </strong> &nbsp; User does not exist.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if($login_pass != $check_user_row['user_pass']){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error : </strong> &nbsp; User does not exist.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }

        $check_user_is_panding = "SELECT * FROM user_tbl WHERE u_username = '$login_username' && user_pass = '$login_pass' && user_status = 0 && is_pending = 1";
        $check_user_is_panding_result = mysqli_query($con, $check_user_is_panding); 
        $check_user_is_padding_nor = mysqli_num_rows($check_user_is_panding_result);

        if($check_user_is_padding_nor > 0){
            header("location:wating.php");
        }

        $check_login_user = "SELECT * FROM user_tbl WHERE u_username = '$login_username' && user_pass ='$login_pass' && user_status = 1 && is_pending = 0";
        $check_login_user_result = mysqli_query($con, $check_login_user);
        $check_login_user_row = mysqli_fetch_assoc($check_login_user_result);
        $check_login_user_nor = mysqli_num_rows($check_login_user_result);
        
        if($check_login_user_nor > 0){
            if($check_user_row['user_type'] == 'user'){
                setcookie('login',$check_login_user_row['user_email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $check_login_user_row['user_email'];
                header("location:../routes/user.php");  
            }
            if($check_user_row['user_type'] == 'admin'){
                setcookie('login',$check_login_user_row['user_email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $check_login_user_row['user_email'];
                header("location:../routes/admin.php");  
            }
        else{
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error : </strong> &nbsp; While accessing data in Database.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            }
        }

    }
            
    function wating_user(){
        $con = Connection();

        $login_id_user = strval($_SESSION['getEmail']);
        echo $login_id_user;
    }


    function check_otp_email($otp_username, $otp_email){
        $con = Connection();
        $_SESSION['EmailGet'] = $otp_email;
        if(empty($otp_username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Username Error : </strong> &nbsp; Username Can not be empty
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(empty($otp_email)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Email Error : </strong> &nbsp; Email Can not be empty
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>"; 
        }
        if(!filter_var($otp_email, FILTER_VALIDATE_EMAIL)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email Error</strong> &nbsp; Check Again Your Email
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }

        $check_otp_user = "SELECT * FROM user_tbl WHERE u_username = '$otp_username' && user_email = '$otp_email' && user_status = 1 && is_pending = 0";
        $check_otp_user_result = mysqli_query($con, $check_otp_user);
        $check_otp_user_row = mysqli_fetch_assoc($check_otp_user_result);
        $check_otp_user_nor = mysqli_num_rows($check_otp_user_result);

        if($check_otp_user_nor > 0){
            if($otp_username != $check_otp_user_row['u_username']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Username Error : </strong> &nbsp; Username does not exist...!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>"; 
            }elseif($otp_email != $check_otp_user_row['user_email']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Email Error : </strong> &nbsp; Email does not exist...!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
            }else{
                $check_otp_data = "SELECT * FROM pass_reset_tbl WHERE pass_username ='$otp_username' && pass_email ='$otp_email'";
                $check_otp_data_result = mysqli_query($con, $check_otp_data);
                $check_otp_data_nor = mysqli_num_rows($check_otp_data_result);

                if($check_otp_data_nor > 0){
                    return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Processing Error : </strong> &nbsp; Cannot Process the task...!
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>";
                }else{
                    $otp_num = rand(10000,99999);

                    $receiver = $otp_email;
                    $subject = "Resent Password..!";
                    $body = "OTP For Resent Password /n GYM Workout /n/n OTP is ".$otp_num;
                    $sender = "From:jehankandy@gmail.com";

                    if(mail($receiver,$subject,$body,$sender)){
                        echo "Send";
                    }else{
                        echo "not";
                    }

                    $inset_otp_data = "INSERT INTO pass_reset_tbl(pass_username,pass_email,otp_no,change_date)VALUES('$otp_username','$otp_email','$otp_num',NOW())";
                    $inset_otp_data_result = mysqli_query($con, $inset_otp_data);



                    if(!$inset_otp_data_result){
                        return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>Error : </strong> &nbsp; While inserting data.....!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                    }else{
                        setcookie('resetPass',$otp_email,time()+5*60,'/');
                        $_SESSION['passReset'] = $otp_email;
                        header("location:otp_pass.php");
                    }
                }
            }
        }else{
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error : </strong> &nbsp; While Accessing Data in Database.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
    }

    function otp_check($otp_get){
        $con = Connection();

        if(empty($otp_get)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>OTP Error : </strong> &nbsp; Input Feild Connot be empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        $login_user_otp = strval($_SESSION['EmailGet']);


        $check_pass_otp = "SELECT * FROM pass_reset_tbl WHERE pass_email = '$login_user_otp' && otp_no = '$otp_get'";
        $check_pass_otp_result = mysqli_query($con, $check_pass_otp);
        $check_pass_otp_row = mysqli_fetch_assoc($check_pass_otp_result);
        $check_pass_otp_nor = mysqli_num_rows($check_pass_otp_result);

        if($check_pass_otp_nor > 0){
            if($otp_get != $check_pass_otp_row['otp_no']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>OTP Error : </strong> &nbsp; OTP Doesn't match.....!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
            }
            else{
                header("location:new_pass.php");
            }
        }else{
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>OTP Error : </strong> &nbsp; No recodes found.....!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }
    }

    function update_pass($update_username,$update_email,$update_pass,$update_cpass){
        $con = Connection();

        if(empty($update_username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Username Error : </strong> &nbsp; Username Cannot be empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(empty($update_email)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Email Error : </strong> &nbsp; Email Cannot be empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(empty($update_pass)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password Error : </strong> &nbsp; Password Cannot be empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if(empty($update_cpass)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password Error : </strong> &nbsp;Confarm Password Cannot be empty.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }
        if($update_pass != $update_cpass){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password Error : </strong> &nbsp;Passwords not match.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        }

        $check_reset_pass = "SELECT * FROM user_tbl WHERE u_username = '$update_username' && user_email = '$update_email' && user_status = 1 && is_pending = 0";
        $check_reset_pass_result = mysqli_query($con, $check_reset_pass);
        $check_reset_pass_row = mysqli_fetch_assoc($check_reset_pass_result);
        $check_reset_pass_nor = mysqli_num_rows($check_reset_pass_result);

        if($check_reset_pass_nor > 0){
            if($update_username != $check_reset_pass_row['u_username']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Username Error : </strong> &nbsp;Username not match.....!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
            }
            elseif($update_email != $check_reset_pass_row['user_email']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Email Error : </strong> &nbsp;Email not match.....!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
            }
            elseif(!filter_var($update_email, FILTER_VALIDATE_EMAIL)){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Email Error : </strong> &nbsp;Check Email.....!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
            }else{
                $update_data_pass = "UPDATE user_tbl SET user_pass = '$update_pass' WHERE user_email = '$update_email' && u_username = '$update_username'";
                $update_data_pass_result = mysqli_query($con, $update_data_pass);
              
                setcookie('resetPass',NULL,time()-5*60,'/');
                session_unset();
                session_destroy();
                header("location:login.php");
            }         
        }else{
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error : </strong> &nbsp;Recodes not Found.....!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";

        }
    }

    function count_members(){
        $con = Connection();

        $member_count = "SELECT * FROM user_tbl WHERE user_type = 'user'";
        $member_count_result = mysqli_query($con, $member_count);
        $member_count_nor = mysqli_num_rows($member_count_result);

        echo $member_count_nor;
    }

    function count_admins(){
        $con = Connection();

        $admin_count = "SELECT * FROM user_tbl WHERE user_type = 'admin'";
        $admin_count_result = mysqli_query($con, $admin_count);
        $admin_count_nor = mysqli_num_rows($admin_count_result);

        echo $admin_count_nor;
    }

    function any_user_data(){
        $con = Connection();

        $login_email = strval($_SESSION['LoginSession']);

        $user_data = "SELECT * FROM user_tbl WHERE user_email = '$login_email'";
        $user_data_result = mysqli_query($con, $user_data);
        $user_data_row = mysqli_fetch_assoc($user_data_result);

        if($user_data_row['user_type'] == 'user'){
            
        }
        
    }
?>

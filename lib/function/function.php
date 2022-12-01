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

        $check_user = "SELECT * FROM user_tbl WHERE u_username = '$login_username' && user_pass = '$login_pass' && 	user_status = 1";
        $check_user_result = mysqli_query($con, $check_user); 
        $check_user_row = mysqli_fetch_assoc($check_user_result);
        $check_user_nor = mysqli_num_rows($check_user_result);

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
        
        if($check_user_nor > 0){
            if($check_user_row['user_type'] == 'user'){
                setcookie('login',$check_user_row['email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $check_user_row['email'];
                header("location:../routes/admin.php");  
            }
            if($check_user_row['user_type'] == 'admin'){
                setcookie('login',$check_user_row['email'],time()+60*60,'/');
                $_SESSION['LoginSession'] = $check_user_row['email'];
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
                    
                }

                header("location:otp_pass.php");
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
?>

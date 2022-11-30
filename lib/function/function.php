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
                        <strong>Password Error : </strong> &nbsp; Email Cannot be Empty.....!
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
            $insert_user = "INSERT INTO user_tbl(u_username,user_email,user_pass,join_date,user_status)VALUES('$username','$email','$pass1',NOW(),0)";
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
            
?>

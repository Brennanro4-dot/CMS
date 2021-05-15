<?php  include "includes/header.php"; ?>

    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    

    <?php

    
if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password =  $_POST['password'];

        if(!empty($username) && !empty($email) && !empty($password))
        {
            // $username_query = "SELECT username FROM users";
            // mysqli_query($connection,$username_query);

            // while($row = mysqli_fetch_array[$username_query])
            //     {
            //         $username_check=$row['username'];

            //         if($username !== $username_check)
            //             {
            //                 $usermessage ="Username is already taken, Try again!";
            //                 header('Location: registration.php');
            //             }
            //     }

         $username = mysqli_real_escape_string($connection,$username);
         $email = mysqli_real_escape_string($connection,$email);
         $password = mysqli_real_escape_string($connection,$password);

         $password = password_hash($password,PASSWORD_BCRYPT, array('cost' => 12));

        
       
            

            $query = "INSERT into users (username,user_email,user_password,user_role,user_firstname,user_lastname) ";
            $query .= "VALUES('{$username}','{$email}','{$password}','subscriber','','')";
            $register_user = mysqli_query($connection,$query);
            if(!$register_user)
                {
                    die('Query Failed'. mysqli_error($connection) . ''.mysqli_errno($connection));
                }
            $message = "Your registration has been submitted";
        }
        else
            {
                $message = "Fields cannot be empty";
            }
        
                


    }
    else
        {
            $message = '';
        }



?>
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1 class="text-center" style="color:white;">Register</h1>
                <hr style="border-top: 1px solid #5cb85c">
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <h6 class = "text-center"><?php echo $message ?></h6>
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                           
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-dark btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


<hr style="border-top: 1px solid #5cb85c">



<?php include "includes/footer.php";?>

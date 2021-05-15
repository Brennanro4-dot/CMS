<?php include 'includes/header.php'?>
<?php

if(isset($_SESSION['username']))
    {
        $usernameSess = $_SESSION['username'];

    $query = "SELECT * from users WHERE username = '{$usernameSess}'";
    $select_user_profile = mysqli_query($connection,$query);
        if(!$select_user_profile)
            {
                die("QUERY FAILED" . mysqli_error($connection)); 
            }
        else
            {
                while($row = mysqli_fetch_array($select_user_profile))
                    {
                        $user_id = $row['user_id'];
                        $username = $row['username'];
                        $user_password = $row['user_password'];
                        $user_firstname = $row['user_firstname'];
                        $user_lastname = $row['user_lastname'];
                        $user_email = $row['user_email'];
                        $user_image = $row['user_image'];
                        
                    }
            }
    }





if(isset($_POST['updateProfile']))
{
   
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];
    $user_firstname =$_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];


        move_uploaded_file($user_image_temp, "../images/$user_image");

        if(empty($user_image))
            {
                $query = "SELECT * FROM users WHERE user_id = $user_id";
                $select_image = mysqli_query($connection,$query);
                

                while($row = mysqli_fetch_array($select_image))
                    {
                        $user_image = $row['user_image'];
                    }
            }
            if(!empty($user_password))
            {
               
                $query_password = "SELECT user_password FROM users WHERE user_id = $user_id";
                $user_password_query = mysqli_query($connection,$query_password);
                
                
                $row = mysqli_fetch_array($user_password_query);
                $db_user_password = $row['user_password'];
                

                if($db_user_password != $user_password)
                {
                    $user_password = password_hash($user_password,PASSWORD_BCRYPT, array('cost' => 10));
                }

                    $user_role = $_SESSION['role'];

                    $query = "UPDATE users SET ";
                    $query .= "user_firstname = '{$user_firstname}', ";
                    $query .= "user_lastname = '{$user_lastname}', ";
                    $query .= "username = '{$username}', ";
                    $query .= "user_password = '{$user_password}', ";
                    $query .= "user_image = '{$user_image}', ";
                    $query .= "user_email = '{$user_email}', ";
                    $query .= "user_role = '{$user_role}' ";
                    $query .= "WHERE user_id = {$user_id}";
        
                    $update_query = mysqli_query($connection,$query);

                    $_SESSION['username'] = $username;
        
                   

            }

       

        
    

}
?>





<body>

    <div id="wrapper">

       <?php include 'includes/navigation.php' ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="color:black" class="text-center">
                            <?php echo $_SESSION['firstname']?>'s Profile
                        </h1>
                        <hr style="border-top: 1px solid #5cb85c">


<form action="" method="post" enctype = "multipart/form-data">

<div class="form-group">
<label style='color:white' for="status">First Name</label>
<input type="text" class="form-control" name = "user_firstname" value ="<?php echo $user_firstname?>">
</div>

<div class="form-group">
<label style='color:white' for="status">Last Name</label>
<input type="text" class="form-control" name = "user_lastname" value ="<?php echo $user_lastname?>">
</div>

<div class="form-group">
<label style='color:white' for="author">Username</label>
<input type="text" class="form-control" name = "username" value ="<?php echo $username?>">
</div>

<div class="form-group">
<label style='color:white' for="status">Password</label>
<input autocomplete = "off" type="password" class="form-control"
oninvalid="this.setCustomValidity('You must re-enter your password to confirm changes')"
oninput="this.setCustomValidity('')"  name = "user_password" required>
</div>

<div class="form-group">
<label style='color:white' for="content">Email</label>
<input type="email" class="form-control" name = "user_email" value ="<?php echo $user_email?>">
</div>

<div class="form-group">
<label style='color:white' for="status">User Image</label>
<img width = "100px" src="../images/<?php echo $post_image ?>" alt="">
<input type="file" style ="color:white;" name = "user_image">
</div>

<div class="form-group">
<input class = "btn btn-primary" type="submit" name = "updateProfile" value = "Update Profile">
</div>

</form>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



 <?php include 'includes/footer.php' ?>
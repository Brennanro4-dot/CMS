<?php
    if(isset($_GET['u_id']))
        {
            $user_id = $_GET['u_id'];
        
        $query = "SELECT * FROM users WHERE user_id = $user_id";
        $select_all_users = mysqli_query($connection,$query);
        
        
        while($row = mysqli_fetch_assoc($select_all_users))
            {
                $user_id = $row['user_id'];
                $username = $row['username'];
                $user_password = $row['user_password'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                $user_role = $row['user_role'];
                $user_image = $row['user_image'];
            }
        
        
            if(isset($_POST['editUser']))
            {
                $username = $_POST['username'];
                $user_password = $_POST['user_password'];
                $user_firstname =$_POST['user_firstname'];
                $user_lastname = $_POST['user_lastname'];
                $user_email = $_POST['user_email'];
                $user_role = $_POST['user_role'];
                $user_image = $_FILES['user_image']['name'];
                $user_image_temp = $_FILES['user_image']['tmp_name'];

                
    
        
                    move_uploaded_file($user_image_temp, "../images/$user_image");
        
                    if(empty($user_image))
                        {
                            $query = "SELECT * FROM users WHERE user_id = $user_id";
                            $select_image = mysqli_query($connection,$query);
                            confirm($select_image);
        
                            while($row = mysqli_fetch_array($select_image))
                                {
                                    $user_image = $row['user_image'];
                                }
                        }
                    if(!empty($user_password))
                        {
                            $query_password = "SELECT user_password FROM users WHERE user_id = $user_id";
                            $user_password_query = mysqli_query($connection,$query_password);
                            confirm($user_password_query);
                            
                            $row = mysqli_fetch_array($user_password_query);
                            $db_user_password = $row['user_password'];

                            if($db_user_password != $user_password)
                            {
                                $user_password = password_hash($user_password,PASSWORD_BCRYPT, array('cost' => 10));
                            }
    
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
                    
                                confirm($update_query);
            
                        }
                   
                    
                
            
            }
        }
        else
            {
              header('Location: index.php');  
            }
?>

<form action="" method="post" enctype = "multipart/form-data">

<div class="form-group">
<label for="status">First Name</label>
<input type="text" class="form-control" name = "user_firstname" value ="<?php echo $user_firstname?>">
</div>

<div class="form-group">
<label for="status">Last Name</label>
<input type="text" class="form-control" name = "user_lastname" value ="<?php echo $user_lastname?>">
</div>

<div class="form-group">
<label for="Category">Role</label>
<select class = "form-control" name="user_role">
<option value='<?php echo $user_role?>'><?php echo $user_role?></option>
<?php
    if($user_role === "admin")
        {
           echo "<option value='subscriber'>Subscriber</option>";
        }
    else
        {
            echo "<option value='admin'>Admin</option>";
        }
 
?>
</select>
</div>


<div class="form-group">
<label for="author">Username</label>
<input type="text" class="form-control" name = "username" value ="<?php echo $username?>">
</div>

<div class="form-group">
<label for="status">Password</label>
<input autocomplete="off" type="password" class="form-control" name = "user_password">
</div>

<div class="form-group">
<label for="content">Email</label>
<input type="email" class="form-control" name = "user_email" value ="<?php echo $user_email?>">
</div>

<div class="form-group">
<label for="status">User Image</label>
<img width = "100px" src="../images/<?php echo $post_image ?>" alt="">
<input type="file" name = "user_image">
</div>

<div class="form-group">
<input class = "btn btn-primary" type="submit" name = "editUser" value = "Amend User">
</div>

</form>
<?php
    if(isset($_POST['createUser']))
        {
            $username = $_POST['username'];
            $user_password = $_POST['user_password'];
            $user_firstname = $_POST['user_firstname'];
            $user_lastname = $_POST['user_lastname'];
            
            $user_image = $_FILES['user_image']['name'];
            $user_image_temp = $_FILES['user_image']['tmp_name'];

            $user_email = $_POST['user_email'];
            $user_role = $_POST['user_role'];

            $user_password = password_hash($user_password,PASSWORD_BCRYPT, array('cost' => 10));
            
                move_uploaded_file($user_image_temp ,"../images/$user_image");


                $query = "INSERT INTO users(username,user_password,user_firstname,user_lastname,user_image,user_email,user_role) ";
                $query .= "Values('{$username}', '{$user_password}', '{$user_firstname}', '{$user_lastname}', '{$user_image}','{$user_email}','{$user_role}')";
                
                $add_user = mysqli_query($connection, $query);


                confirm($add_user);

                echo "<p class = bg-success> User Added. <a href = './users.php'>View Users</a>";

        }
?>

<form action="" method="post" enctype = "multipart/form-data">

<div class="form-group">
<label for="status">First Name</label>
<input type="text" class="form-control" name = "user_firstname">
</div>

<div class="form-group">
<label for="status">Last Name</label>
<input type="text" class="form-control" name = "user_lastname">
</div>

<div class="form-group">
<label for="Category">Role</label>
<select class = "form-control" name="user_role">
<option value='subscriber'>Select Options</option>
<option value='admin'>Admin</option>
<option value='subscriber'>Subscriber</option>
</select>
</div>


<div class="form-group">
<label for="author">Username</label>
<input type="text" class="form-control" name = "username">
</div>

<div class="form-group">
<label for="status">Password</label>
<input type="password" class="form-control" name = "user_password">
</div>

<div class="form-group">
<label for="content">Email</label>
<input type="email" class="form-control" name = "user_email">
</div>

<div class="form-group">
<label for="status">User Image</label>
<input type="file" name = "user_image">
</div>

<div class="form-group">
<input class = "btn btn-primary" type="submit" name = "createUser" value = "Create User">
</div>

</form>
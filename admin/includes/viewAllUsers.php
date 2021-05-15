<table class = "table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Username</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                  <th>Role</th>
                                  <th>Promote</th>
                                  <th>Demote</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                 
                              </tr>
                          </thead>
                          <tbody>
                           <?php  
                                    $query = "SELECT * FROM users";
                                    $select_all_users = mysqli_query($connection,$query);
                                    
                                    
                                    while($row = mysqli_fetch_assoc($select_all_users))
                                        {
                                            $user_id = $row['user_id'];
                                            $username = $row['username'];
                                            $user_firstname = $row['user_firstname'];
                                            $user_lastname = $row['user_lastname'];
                                            $user_email = $row['user_email'];
                                            $user_image = $row['user_image'];
                                            $user_role = $row['user_role'];

                                            $username = htmlentities($username);

                                        
                                            echo "<tr>";
                                            echo "<td>{$user_id}</td>";
                                            echo "<td>{$username}</td>";
                                            echo "<td>{$user_firstname}</td>";
                                            echo "<td>{$user_lastname}</td>";
                                            echo "<td>{$user_email}</td>";
                                            echo "<td>{$user_role}</td>";
                                            echo"<td><a href ='users.php?change_to_admin={$user_id}'><span style = 'color:green'><i class='glyphicon glyphicon-arrow-up'></i></span></a></td>";
                                            echo "<td><a href ='users.php?change_to_subscriber={$user_id}'><span style = 'color:red'><i class='glyphicon glyphicon-arrow-down'></i></span></a></td>";
                                            echo"<td><a href ='users.php?source=editUser&u_id={$user_id}'><span style = 'color:purple'><i class='glyphicon glyphicon-pencil'></i></span></a></td>";
                                            echo "<td><a  onClick=\"javascript: return confirm('Are you sure you want to delete this User?'); \" href ='users.php?delete={$user_id}'><span style = 'color:grey'><i class='glyphicon glyphicon-trash'></i></span></a></td>";
                                            echo "</tr>";
                                        }
               ?>
                          </tbody>
                      </table>  

<?php

    if(isset($_GET['delete']))
        {
    
             if(isset($_SESSION['role']))
                 {
                     if($_SESSION['role'] === 'admin')
                     {
                        $user_id = $_GET['delete'];
                        $user_id = mysqli_real_escape_string($connection,$user_id);

                        $query = "DELETE FROM users WHERE user_id = $user_id";
            
                        $delete_user = mysqli_query($connection,$query);
            
                        confirm($delete_user);
                        header('Location: users.php ');

                     }
                   

                 }
               
        }

    
        if(isset($_GET['change_to_admin']))
        {
                $user_id = $_GET['change_to_admin'];

            $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $user_id";

            $promote_user = mysqli_query($connection,$query);

            confirm($promote_user);
            header('Location: users.php ');
        }

        if(isset($_GET['change_to_subscriber']))
        {
                $user_id = $_GET['change_to_subscriber'];

            $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $user_id";

            $demote_user = mysqli_query($connection,$query);

            confirm($demote_user);
            header('Location: users.php ');
        }

        
    
       


?>
       
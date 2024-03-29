<!-- Header -->
<?php include 'includes/header.php' ?>

<!-- Navigation  -->
<?php include 'includes/navigation.php' ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

    <?php

            if(isset($_GET['p_id']))
                {
                    $post_id = $_GET['p_id'];

            $view_query = "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = {$post_id}";
            $view_query_execute = mysqli_query($connection,$view_query);
            if(!$view_query_execute)
                    {
                        die('QUERY FAILED'. mysqli_error($connection));
                    }
               
            $query = "SELECT * FROM posts WHERE post_id = $post_id";
            $select_all_posts = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_all_posts))
            {
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];

                $post_title = mysqli_real_escape_string($connection,$post_title);
                $post_author = mysqli_real_escape_string($connection,$post_author);
                $post_date = mysqli_real_escape_string($connection,$post_date);
                $post_image = mysqli_real_escape_string($connection,$post_image);
                $post_content = mysqli_real_escape_string($connection,$post_content);
                $post_content = stripslashes($post_content); //removes slashes before apostrophe eg: Firmino's ball
               
                ?>



                <!-- First Blog Post -->
                <h2 style = "color:white">
                    <?php echo $post_title ?>
                </h2>
                <p style= "color:#5cb85c">
                    by <a style="color:white;" href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $post_id ?>"><?php echo $post_author ?></a>
                </p>
                <p style = "color:white"><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr style="border-top: 1px solid #5cb85c;">
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                <hr style="border-top: 1px solid #5cb85c;">
               <span style="color:white"><p><?php echo $post_content ?></p></span>
               <hr style="border-top: 1px solid #5cb85c;">

    <?php
            }  
        }
        else
            {
                header('Location: index.php');
            }
    ?>

     <!-- Blog Comments -->

            <?php

            if(isset($_POST['create_comment']))
                {
                    $post_id = $_GET['p_id'];
                    if(isset($_SESSION['username']))
                        {
                            $comment_author = $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
                            $comment_email =  $_SESSION['email'];
                        }
                    else
                        {
                            $comment_author = $_POST['comment_author'];
                            $comment_email = $_POST['comment_email'];
                        }

                   
                            $comment_content = $_POST['comment_content'];
                            
                            $comment_author = mysqli_real_escape_string($connection,$comment_author);
                            $comment_email = mysqli_real_escape_string($connection,$comment_email);
                            $comment_content = mysqli_real_escape_string($connection,$comment_content);


                    if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content))
                    {
                        $query = "INSERT INTO comments (comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date) ";
                        $query .= "VALUES($post_id,'{$comment_author}','{$comment_email}','{$comment_content}','Pending',now())";
    
                        $insert_comment = mysqli_query($connection,$query);
                        
                        
                        if(!$insert_comment)
                        {
                            die("Query Failed" . mysqli_error($connection));
                        }
    
                        // $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                        // $query .= "WHERE post_id = $post_id";
        
                        // $updateCommentCount = mysqli_query($connection,$query);
                        // if(!$updateCommentCount)
                        //     {
                        //         die("Query Failed " . mysqli_error($connection));
                        //     }
                           


                    }
                   else
                    {
                        echo "<script>alert('Fields cannot be empty!')</script>";
                    }
                

                  

                }



            ?>

                <!-- Comments Form -->
                <div class="well">
                    <h4 style="color:#5cb85c;">Leave a Comment:</h4>
                    <form action="" method="post">
                    <?php
                        if(!isset($_SESSION['username']))
                            {
                                echo "<div class='form-group'>
                                <label for='author' style='color:#5cb85c;'>Your Name</label>
                                <input type='text' class ='form-control' name = 'comment_author'>
                                </div>";

                                echo "<div class='form-group'>
                                <label for='email' style='color:#5cb85c;'>Your Email</label>
                                <input type='email' class ='form-control' name = 'comment_email'>
                                </div>";

                            }

                    ?>

                        <div class="form-group">
                        <label for="comment" style="color:#5cb85c;">Your Comment</label>
                            <textarea name = "comment_content" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" name= "create_comment" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr style="border-top: 1px solid #5cb85c;">

                <!-- Posted Comments -->
<?php
              $query = "SELECT * FROM comments WHERE comment_post_id = $post_id ";
              $query .= "AND comment_status = 'Approved' ";
              $query .= "ORDER BY comment_id DESC";

              $select_comments_for_post = mysqli_query($connection,$query);
              if(!$select_comments_for_post)
                {
                    die("Query Failed" . mysqli_error($connection));
                }
                
            while($row = mysqli_fetch_array($select_comments_for_post))
                {
                    $comment_author = $row['comment_author'];
                    $comment_date = $row['comment_date'];
                    $comment_content = $row['comment_content'];
                   
                    $comment_author = htmlentities($comment_author);
                    $comment_date = htmlentities($comment_date);
                    $comment_content = htmlentities($comment_content);
                    $comment_content = stripslashes($comment_content);

                



?>
                <!-- Comment -->
                <div class="media">
                    <a style="color:white" class="pull-left" href="#">
                        <?php

                       
                        $query = "SELECT user_image FROM users WHERE CONCAT( user_firstname,  ' ', user_lastname )  = '$comment_author'";
                                    $image_query = mysqli_query($connection,$query);
                                    if(mysqli_num_rows($image_query)!=0)
                                    {
                                        $row = mysqli_fetch_array($image_query);
                                        $image = $row['user_image'];
                                        echo "<img width = 75px; height = 75px; class='img-circle' src='images/$image' alt='Profile Pic'>";  
                                        
                                    }
                                    else
                                        {
                                            echo "<img width = 75px; height = 75px; class='img-circle' src='images/brapcantcopythisnamemfer2442.png' alt='Profile Pic'>"; 
                                        }
                                   
                                        
                         ?>
                    </a>
                    <div class="media-body">
                        <h4 style="color:white" class="media-heading"><?php echo $comment_author ?>
                            <small style="color:#5cb85c;"><?php echo $comment_date ?></small>
                        </h4>
                       <span style="color:white;"><?php echo $comment_content ?></span>
                    </div>
                </div>
            <?php } ?>
            
            </div>
        
            <!-- Sidebar -->
            <?php include 'includes/sidebar.php' ?>

            <hr style="border-top: 1px solid #5cb85c;">

        <!-- Footer -->
        <?php include 'includes/footer.php' ?>


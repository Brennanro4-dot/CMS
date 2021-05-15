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
                    $post_author = $_GET['author'];
                }
            $query = "SELECT * FROM posts WHERE post_author = '{$post_author}'";
            $select_all_author_posts = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_all_author_posts))
            {
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
               
                ?>



                <!-- First Blog Post -->
                <h2 style ="color:white">
                    <?php echo $post_title ?>
                </h2>
                <p style="color:#5cb85c">
                  All posts by <?php echo $post_author ?>
                </p>
                <p style="color:white"><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr style="border-top: 1px solid #5cb85c;">
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                <<hr style="border-top: 1px solid #5cb85c;">
                <span style="color:white"><p><?php echo $post_content ?></p></span>
                <hr style="border-top: 1px solid #5cb85c;">

    <?php
            }
    ?>

     <!-- Blog Comments -->

            <?php

            if(isset($_POST['create_comment']))
                {
                    $post_id = $_GET['p_id'];

                    $comment_author = $_POST['comment_author'];
                    $comment_email = $_POST['comment_email'];
                    $comment_content = $_POST['comment_content'];

                    if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content))
                    {
                        $query = "INSERT INTO comments (comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date) ";
                        $query .= "VALUES($post_id,'{$comment_author}','{$comment_email}','{$comment_content}','Pending',now())";
    
                        $insert_comment = mysqli_query($connection,$query);
                        
                        
                        if(!$insert_comment)
                        {
                            die("Query Failed" . mysqli_error($connection));
                        }
    
                        $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                        $query .= "WHERE post_id = $post_id";
        
                        $updateCommentCount = mysqli_query($connection,$query);
                        if(!$updateCommentCount)
                            {
                                die("Query Failed " . mysqli_error($connection));
                            }
                           


                    }
                   else
                    {
                        echo "<script>alert('Fields cannot be empty!')</script>";
                    }
                

                  

                }



            ?>

            
            </div>
        
            <!-- Sidebar -->
            <?php include 'includes/sidebar.php' ?>

            <hr style="border-top: 1px solid #5cb85c;">

        <!-- Footer -->
        <?php include 'includes/footer.php' ?>


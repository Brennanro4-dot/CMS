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
            if(isset($_GET['category']))
                {
                    $cat_id = $_GET['category'];
                }
            $query = "SELECT * FROM posts WHERE post_category_id = $cat_id";
            $select_all_cat_posts = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_all_cat_posts))
            {
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = substr($row['post_content'],0,250);
               
                ?>



                <!-- First Blog Post -->
                <h2>
                    <a style ="color:white;" href="post.php?p_id=<?php echo $post_id;?>"><?php echo $post_title ?></a>
                </h2>
                <p style="color:#5cb85c;">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr style="border-top: 1px solid #5cb85c;">
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                <hr style="border-top: 1px solid #5cb85c;">
               <span style="color:white"><p><?php echo $post_content ?></p></span>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr style="border-top: 1px solid #5cb85c;">

    <?php
            }
    ?>


               
            </div>
        
            <!-- Sidebar -->
            <?php include 'includes/sidebar.php' ?>

            <hr style="border-top: 1px solid #5cb85c">

        <!-- Footer -->
        <?php include 'includes/footer.php' ?>


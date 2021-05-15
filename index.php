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

            if(isset($_GET['page']))
                {
                    $page = $_GET['page'];

                }
            else
                {
                    $page= '';
                }

            if($page =="" || $page == 1)
                {
                    $page1 = 0;
                }
            else
                {
                    $page1 = ($page*5) - 5;
                }



        ?>

    <?php

        if(isset($_GET['c_id']))
            {

                $cat_id = $_GET['c_id'];
                $query = "SELECT * FROM posts WHERE post_category_id = $cat_id ORDER BY post_id DESC";
                $select_all_posts_by_cat = mysqli_query($connection,$query);

                $post_query_count ="SELECT * FROM posts";
            $find_count = mysqli_query($connection,$post_query_count);
            $count = mysqli_num_rows($find_count);

            $count = ceil($count/5); //round up

            $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $page1, 5";
            $select_all_posts = mysqli_query($connection,$query);
    
                while($row = mysqli_fetch_assoc($select_all_posts_by_cat))
                {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'],0,250);
                    $post_status = $row['post_status'];
    
                    if($post_status === 'published')
                        {
                        //    echo "<h1 class = 'text-center'>NO POSTS HERE. SORRY!</h1>";
                        
                        
                    
                        
                          
                   
                    ?>
    
    
                            
                    <!-- First Blog Post -->
                    <h2>
                        <a style ="color:white;" href="post.php?p_id=<?php echo $post_id;?>"><?php echo $post_title ?></a>
                    </h2>
                    <p style = "color:#5cb85c;">
                        by <a style="color:white;" href="index.php"><?php echo $post_author ?></a>
                    </p>
                    <p style ="color:white;"><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                    <hr style="border-top: 1px solid #5cb85c">
                    <a href ="post.php?p_id=<?php echo $post_id;?>"><img class="img-responsive" src="images/<?php echo $post_image ?>" alt=""></a>
                    <hr style="border-top: 1px solid #5cb85c">
                    <span style ="color:white;"><p style="color:white"><?php echo $post_content ?></p></span>
                    <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    
                    <hr style="border-top: 1px solid #5cb85c">
    
        <?php
                    }    } 
        ?>
        <?php
    
            }
            else
            {

            $post_query_count ="SELECT * FROM posts";
            $find_count = mysqli_query($connection,$post_query_count);
            $count = mysqli_num_rows($find_count);

            $count = ceil($count/5); //round up

            $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $page1, 5";
            $select_all_posts = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_all_posts))
            {
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = substr($row['post_content'],0,250);
                $post_status = $row['post_status'];

                if($post_status === 'published')
                    {
                    //    echo "<h1 class = 'text-center'>NO POSTS HERE. SORRY!</h1>";
                    
                    
                
                    

                    
               
                ?>


               
                <!-- First Blog Post -->
                <h2 >
                    <a style = "color:white;" href="post.php?p_id=<?php echo $post_id;?>"><?php echo $post_title ?></a>
                </h2>
                <p style="color:#5cb85c">
                    by <a style = "color:white;" href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $post_id ?>"><?php echo $post_author ?></a>
                </p>
                <p style = "color:white;"><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr style="border-top: 1px solid #5cb85c;">
                <a href ="post.php?p_id=<?php echo $post_id;?>"><img class="img-responsive" src="images/<?php echo $post_image ?>" alt=""></a>
                <hr style="border-top: 1px solid #5cb85c;">
                <span style="color:white"><p><?php echo $post_content ?></p></span>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr style="border-top: 1px solid #5cb85c;">

    <?php
                }    } }
    ?>


               
            </div>
        
            <!-- Sidebar -->
            <?php include 'includes/sidebar.php' ?>

            <hr style="border-top: 1px solid #5cb85c">

        <ul class = "pager">
        <?php

        for($i=1;$i <= $count;$i++)
            {
                if($i== $page)
                    {
                        echo"<span style='background:#001f3f;'><li><a href = 'index.php?page={$i}'>{$i}</a></li></span>";
                    }
                    else
                    {
                        echo"<li><a href = 'index.php?page={$i}'>{$i}</a></li>";
                    }
                
            }

        ?>


        </ul>

        <!-- Footer -->
        <?php include 'includes/footer.php' ?>



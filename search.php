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
  
if(isset($_POST['submit']))
{
    $search = $_POST['search'];
    
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";

    $search_query = mysqli_query($connection, $query);

    if(!$search_query)
        {
            die("Query Failed" . mysqli_error($connection));
        }
    
    $count = mysqli_num_rows($search_query);

    if($count == 0)
        {
            echo "<h1>No results found</h1>";
        }
    else
        {
            
         while($row = mysqli_fetch_assoc($search_query))
            {
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
               
                ?>



                <!-- First Blog Post -->
                <h2>
                    <a style ="color:white" href="#"><?php echo $post_title ?></a>
                </h2>
                <p style ="color:#5cb85c">
                    by <a style="color:white" href="index.php"><?php echo $post_author ?></a>
                </p>
                <p style ="color:white"><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr style="border-top: 1px solid #5cb85c">
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                <hr style="border-top: 1px solid #5cb85c">
                <span style ="color:white"><p><?php echo $post_content ?></p></span>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr style="border-top: 1px solid #5cb85c">

    <?php
            }
    
        }
} ?>



               
            </div>
        
            <!-- Sidebar -->
            <?php include 'includes/sidebar.php' ?>

            <hr style="border-top: 1px solid #5cb85c">

        <!-- Footer -->
        <?php include 'includes/footer.php' ?>


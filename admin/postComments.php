
<?php include 'includes/adminHeader.php'?>
<body>

    <div id="wrapper">

       <?php include 'includes/adminNavigation.php' ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style = "text-align:center">
                            Welcome to the Admin Section
                            <?php echo $_SESSION['firstname']?>
                        </h1>
<table class = "table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Author</th>
                                  <th>Comment</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>In Response to</th>
                                  <th>Date</th>
                                  <th>Approve</th>
                                  <th>Reject</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                           <?php  
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM comments WHERE comment_post_id = " . mysqli_real_escape_string($connection,$id) . " ORDER BY comment_id DESC";
                                    $select_all_comments = mysqli_query($connection,$query);
                                    
                                    
                                    while($row = mysqli_fetch_assoc($select_all_comments))
                                        {
                                            $comment_id = $row['comment_id'];
                                            $comment_post_id = $row['comment_post_id'];
                                            $comment_email = $row['comment_email'];
                                            $comment_author = $row['comment_author'];
                                            $comment_date = $row['comment_date'];
                                            $comment_content = $row['comment_content'];
                                            $comment_status = $row['comment_status'];

                                            $comment_content = htmlentities($comment_content);

                                        
                                            echo "<tr>";
                                            echo "<td>{$comment_id}</td>";
                                            echo "<td>{$comment_author}</td>";
                                            echo "<td>{$comment_content}</td>";
                                            echo "<td>{$comment_email}</td>";
                                            echo "<td>{$comment_status}</td>";
                            


                                        $query = "SELECT * FROM posts WHERE post_id = {$comment_post_id}";
                                        $select_all_comments_post = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_all_comments_post))
                                        {
                                            $post_id = $row['post_id'];
                                            $post_title = $row['post_title'];
                                            

                                            echo "<td><a href='../post.php?p_id=$post_id'>{$post_title}</a></td>";

                                            
                                        }
                                            
                                            echo "<td>{$comment_date}</td>";
                                            echo"<td><a href ='postComments.php?approve={$comment_id}&id=". $id . "''><span style = 'color:green'><i class='glyphicon glyphicon-ok'></i></span></a></td>";
                                            echo "<td><a href ='postComments.php?reject={$comment_id}&id=". $id . "''><span style = 'color:red'><i class='glyphicon glyphicon-remove'></i></span></a></td>";
                                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this comment?'); \" href ='postComments.php?delete={$comment_id}&id=". $id . "'><span style = 'color:grey'><i class='glyphicon glyphicon-trash'></i></span></a></td>";
                                            echo "</tr>";
                                        }
               ?>
                          </tbody>
                      </table>  

<?php

    if(isset($_GET['delete']))
        {
                $comment_id = $_GET['delete'];

            $query = "DELETE FROM comments WHERE comment_id = $comment_id";

            $delete_comment = mysqli_query($connection,$query);

            confirm($delete_comment);
            header("Location: postComments.php?id=". $id. "");
        }

    
        if(isset($_GET['approve']))
        {
                $comment_id = $_GET['approve'];

            $query = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id = $comment_id";

            $approve_comment = mysqli_query($connection,$query);

            confirm($approve_comment);
            header("Location: postComments.php?id=". $id. "");
        }

        if(isset($_GET['reject']))
        {
                $comment_id = $_GET['reject'];

            $query = "UPDATE comments SET comment_status = 'Rejected' WHERE comment_id = $comment_id";

            $reject_comment = mysqli_query($connection,$query);

            confirm($reject_comment);
            header("Location: postComments.php?id=". $id. "");
        }

        
    
       


?>



</div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



 <?php include 'includes/adminFooter.php' ?>
       
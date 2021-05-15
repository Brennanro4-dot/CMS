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
                                    $query = "SELECT * FROM comments ORDER BY comment_id DESC";
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
                                            echo"<td><a href ='comments.php?approve={$comment_id}'><span style = 'color:green'><i class='glyphicon glyphicon-ok'></i></span></a></td>";
                                            echo "<td><a href ='comments.php?reject={$comment_id}'><span style = 'color:red'><i class='glyphicon glyphicon-remove'></i></span></a></td>";
                                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this comment?'); \" href ='comments.php?delete={$comment_id}'><span style = 'color:grey'><i class='glyphicon glyphicon-trash'></i></span></a></td>";
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
            header('Location: comments.php ');
        }

    
        if(isset($_GET['approve']))
        {
                $comment_id = $_GET['approve'];

            $query = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id = $comment_id";

            $approve_comment = mysqli_query($connection,$query);

            confirm($approve_comment);
            header('Location: comments.php ');
        }

        if(isset($_GET['reject']))
        {
                $comment_id = $_GET['reject'];

            $query = "UPDATE comments SET comment_status = 'Rejected' WHERE comment_id = $comment_id";

            $reject_comment = mysqli_query($connection,$query);

            confirm($reject_comment);
            header('Location: comments.php ');
        }

        
    
       


?>
       
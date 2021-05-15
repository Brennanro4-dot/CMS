 <?php include("deleteModal.php");
 
 if(isset($_POST['checkBoxArray']))
    {
        foreach($_POST['checkBoxArray'] as $postValueID)
            {
                $bulk_options = $_POST['bulk_options'];

               switch($bulk_options)
               {
                   case 'published':
                    $query ="UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id= {$postValueID}";
                    $update_to_published = mysqli_query($connection,$query);
                    confirm($update_to_published);
                    break;

                    case 'draft':
                    $query ="UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id= {$postValueID}";
                    $update_to_draft = mysqli_query($connection,$query);
                    confirm($update_to_draft);
                    break;

                    case 'delete':
                    $query ="DELETE FROM posts WHERE post_id= {$postValueID}";
                    $delete_post = mysqli_query($connection,$query);
                    confirm($delete_post);
                    break;

                    case 'clone':
                    $query = "SELECT * FROM posts WHERE post_id= {$postValueID} ";
                    $select_all_posts = mysqli_query($connection,$query);
                    
                    
                    while($row = mysqli_fetch_assoc($select_all_posts))
                        {
                            $post_id = $row['post_id'];
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_tags = $row['post_tags'];
                            $post_status = $row['post_status'];
                            $post_category = $row['post_category_id'];
                            $post_content = $row['post_content'];
                            
                            $post_title = mysqli_real_escape_string($connection,$post_title);
                            $post_author = mysqli_real_escape_string($connection,$post_author);
                            $post_tags = mysqli_real_escape_string($connection,$post_tags);
                            $post_content = mysqli_real_escape_string($connection,$post_content);
                        }
                        $query = "INSERT INTO posts(post_title,post_author,post_category_id,post_status,post_image,post_tags,post_content,post_date) ";
                        $query .= "Values('{$post_title}', '{$post_author}', '{$post_category}', '{$post_status}', '{$post_image}','{$post_tags}','{$post_content}' ,now())";
                    $clone_post = mysqli_query($connection,$query);
                    confirm($clone_post);
                    break;
               }
            }
    }


 ?>
 
 
 <form action="" method ="post">
      <div style ="padding-left:0px;" class = "col-xs-4" id="bulkOptionsContainer">
        <select name="bulk_options"  class="form-control" id="">
            <option value="">Select Options</option>
            <option value="published">Publish</option>
            <option value="draft">Draft</option>
            <option value="delete">Delete</option>
            <option value="clone">Clone</option>
        </select>
      </div>
      
      <div class="col-xs-4" style = "padding-bottom:5px">

      <input type="submit" class="btn btn-success" name="submit" value= "Apply">
      <a class="btn btn-primary" href="posts.php?source=addPost">Add New</a>
      

      </div>
      <table style= "table-layout:fixed; width:100%;" class = "table table-bordered table-hover">

                          <thead>
                              <tr>
                                  <th><input type="checkbox" id ="selectAllBoxes"></th>
                                  <th>ID</th>
                                  <th>Author</th>
                                  <th>Title</th>
                                  <th>Category</th>
                                  <th>Status</th>
                                  <th>Image</th>
                                  <th>Tags</th>
                                  <th>Comments</th>
                                  <th>View Count</th>
                                  <th>Date</th>
                                  <th>View</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                  <th>Reset Views</th>
                              </tr>
                          </thead>
                          <tbody>
                           <?php  
                                    $query = "SELECT * FROM posts ORDER BY post_id DESC ";
                                    $select_all_posts = mysqli_query($connection,$query);
                                    
                                    
                                    while($row = mysqli_fetch_assoc($select_all_posts))
                                        {
                                            $post_id = escape($row['post_id']);
                                            $post_title = escape($row['post_title']);
                                            $post_author = escape($row['post_author']);
                                            $post_date = escape($row['post_date']);
                                            $post_image = escape($row['post_image']);
                                            $post_tags = escape($row['post_tags']);
                                            $post_status = escape($row['post_status']);
                                            $post_category = escape($row['post_category_id']);
                                            $post_comments = escape($row['post_comment_count']);
                                            $post_views_count = escape($row['post_views_count']);

                                        
                                            echo "<tr>";
                                            ?>
                                            <td><input class ='cB' type='checkbox' name = 'checkBoxArray[]' value = <?php echo $post_id ?>></td>
                                            <?php
                                            echo "<td>{$post_id}</td>";
                                            echo "<td>{$post_author}</td>";
                                            echo "<td>{$post_title}</td>";
                                            


                                        $query = "SELECT * FROM categories WHERE cat_id = {$post_category}";
                                        $select_all_categories_edit = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_all_categories_edit))
                                        {
                                            $cat_id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];

                                            echo "<td>{$cat_title}</td>";

                                            
                                        }




                                        echo "<td>{$post_status}</td>";
                                            echo "<td><img width =40px; src ='../images/{$post_image}' alt = 'image'></td>";
                                            echo "<td style = 'max-width: 100px; overflow: hidden;
                                            text-overflow: ellipsis; white-space: nowrap;'>{$post_tags}</td>";


                                    $query = "SELECT * FROM comments WHERE comment_post_id = {$post_id}";
                                    $comment_count = mysqli_query($connection,$query);
                                    $count_comments = mysqli_num_rows($comment_count);

                                            echo "<td><a href ='postComments.php?id=$post_id'>{$count_comments}</a></td>";





                                            echo "<td>{$post_views_count}</td>";
                                            echo "<td>{$post_date}</td>";
                                            echo"<td><a href ='../post.php?p_id={$post_id}'><span style = 'color:gold'><i class='glyphicon glyphicon-eye-open'></i></span></a></td>";
                                            echo"<td><a href ='posts.php?source=editPost&p_id={$post_id}'><span style = 'color:purple'><i class='glyphicon glyphicon-pencil'></i></span></a></td>";
                                            // echo "<td><a href ='' class='delete_link'>Delete</a></td>";
                                            echo "<td><a id='delete_link' href ='posts.php?delete={$post_id}'><span style = 'color:red'><i class='glyphicon glyphicon-remove'></i></span></a></td>";
                                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to reset the post view count?'); \" href ='posts.php?reset={$post_id}'><span style = 'color:red'><i class='glyphicon glyphicon-minus'></i></span></a></td>";
                                            echo "</tr>";
                                        }
               ?>
                          </tbody>
                      </table>  
                      </form>

                

<?php

    if(isset($_GET['delete']))
        {
            if(isset($_SESSION['role']))
            {
                
                if($_SESSION['role'] == 'admin')
                    {
                    $post_id = $_GET['delete'];
                    $post_id = mysqli_real_escape_string($connection, $post_id);

                        $query = "DELETE FROM posts WHERE post_id = $post_id";

                        $delete_post = mysqli_query($connection,$query);

                        confirm($delete_post);
                        header('Location: posts.php ');
                    }
            }
        }

        if(isset($_GET['reset']))
        {
                $post_id = $_GET['reset'];

            $query = "UPDATE posts SET post_views_count = 0 WHERE post_id = $post_id";

            $delete_post = mysqli_query($connection,$query);

            confirm($delete_post);
            header('Location: posts.php ');
        }

        
    
       


?>

<script>

    $(document).ready(function() 
        {
            $('#delete_link').on('click',function(){
            
                 $('#myModal').modal('show');
             });

        });

</script>
       
<?php


  if(isset($_GET['p_id']))
    {
        $p_id = $_GET['p_id'];
    }
    

$query = "SELECT * FROM posts WHERE post_id = $p_id";
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
        $post_content = $row['post_content'];
        $post_category = $row['post_category_id'];
        $post_comments = $row['post_comment_count'];
    }


    if(isset($_POST['updatePost']))
    {
            $post_title = $_POST['post_title'];
            $post_author = $_POST['post_author'];
            $post_category_id = $_POST['post_category_id'];
            $post_status = $_POST['post_status']; 
            $post_image = $_FILES['post_image']['name'];
            $post_image_temp = $_FILES['post_image']['tmp_name'];
            $post_tags = $_POST['post_tags'];
            $post_content = $_POST['post_content'];
            $post_content = mysqli_real_escape_string($connection, $post_content);
            $post_title = mysqli_real_escape_string($connection, $post_title);
            $post_author = mysqli_real_escape_string($connection, $post_author);
            $post_tags = mysqli_real_escape_string($connection, $post_tags);
            $post_content = mysqli_real_escape_string($connection, $post_content);

            move_uploaded_file($post_image_temp, "../images/$post_image");

            if(empty($post_image))
                {
                    $query = "SELECT * FROM posts WHERE post_id = $p_id";
                    $select_image = mysqli_query($connection,$query);
                    confirm($select_image);

                    while($row = mysqli_fetch_array($select_image))
                        {
                            $post_image = $row['post_image'];
                        }
                }

            $query = "UPDATE posts SET ";
            $query .= "post_title = '{$post_title}', ";
            $query .= "post_author = '{$post_author}', ";
            $query .= "post_category_id = '{$post_category_id}', ";
            $query .= "post_status = '{$post_status}', ";
            $query .= "post_image = '{$post_image}', ";
            $query .= "post_tags = '{$post_tags}', ";
            $query .= "post_content = '{$post_content}', ";
            $query .= "post_date = now() ";
            $query .= "WHERE post_id = {$post_id}";

            $update_query = mysqli_query($connection,$query);

            confirm($update_query);

            echo "<p class = bg-success> Post Updated. <a href = '../post.php?p_id={$p_id}'>View Post</a> or <a href = './posts.php'>Edit other Post</a></p>";
        
    
    }

?>

<form action="" method="post" enctype = "multipart/form-data">

<div class="form-group">
<label for="title">Post Title</label>
<input value = "<?php echo $post_title ?>" type="text" class="form-control" name = "post_title">
</div>

<div class="form-group">
<label for="Category">Post Category</label>
<select class = "form-control" name="post_category_id">
<?php 

    $query = "SELECT * FROM categories";
    $select_all_categories = mysqli_query($connection,$query);

    confirm($select_all_categories);

    while($row = mysqli_fetch_assoc($select_all_categories))
        {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            echo "<option value='{$cat_id}'>{$cat_title}</option>";
        }


?>
</select>
</div>

<div class="form-group">
<label for="author">Post Author</label>
<input value = "<?php echo $post_author ?>" type="text" class="form-control" name = "post_author">
</div>

<div class="form-group">
<label for="author">Post Status</label>
<select class = form-control name="post_status" >
<option value='<?php echo $post_status ?>'><?php echo $post_status ?></option>
<?php

        if($post_status == 'published')
            {
                 echo "<option value='draft'>Draft</option>";
            }
            else
            {
                echo "<option value='published'>Publish</option>";
            }


?>
</select>
</div>


<div class="form-group">
<label for="Category">Post Image</label>
<img width = "100px" src="../images/<?php echo $post_image ?>" alt="">
<input type="file" name = "post_image">
</div>

<div class="form-group">
<label for="status">Post Tags</label>
<input value = "<?php echo $post_tags ?>"  type="text" class="form-control" name = "post_tags">
</div>

<div class="form-group">
<label for="content">Post Content</label>
<textarea class="form-control" name = "post_content" id = "body" cols = "30" rows = "10"><?php echo $post_content ?> </textarea>
</div>

<div class="form-group">
<input class = "btn btn-primary" type="submit" name = "updatePost" value = "Update">
</div>

</form>
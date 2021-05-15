<?php
    if(isset($_POST['createPost']))
        {
            $post_title = $_POST['post_title'];
            $post_author = $_POST['post_author'];
            $post_category_id = $_POST['post_category_id'];
            $post_status = $_POST['post_status'];

            $post_image = $_FILES['post_image']['name'];
            $post_image_temp = $_FILES['post_image']['tmp_name'];

            $post_tags = $_POST['post_tags'];
            $post_content = $_POST['post_content'];
            $post_title = mysqli_real_escape_string($connection, $post_title);
            $post_author = mysqli_real_escape_string($connection, $post_author);
            $post_tags = mysqli_real_escape_string($connection, $post_tags);
            $post_content = mysqli_real_escape_string($connection, $post_content);
            $post_date = date('d-m-y');



                move_uploaded_file($post_image_temp ,"../images/$post_image");


                $query = "INSERT INTO posts(post_title,post_author,post_category_id,post_status,post_image,post_tags,post_content,post_date) ";
                $query .= "Values('{$post_title}', '{$post_author}', '{$post_category_id}', '{$post_status}', '{$post_image}','{$post_tags}','{$post_content}' ,now())";

                $add_post = mysqli_query($connection, $query);


                confirm($add_post);

                $p_id = mysqli_insert_id($connection); 

                echo "<p class = bg-success> Post Added. <a href = '../post.php?p_id={$p_id}'>View Post</a> or <a href = './posts.php'>View All Posts</a></p>";

        }
?>

<form action="" method="post" enctype = "multipart/form-data">

<div class="form-group">
<label for="title">Post Title</label>
<input type="text" class="form-control" name = "post_title">
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

<?php

$username = $_SESSION['username'];
    $query ="SELECT * FROM users WHERE username = '{$username}'";
$author_query = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($author_query))
        {
            $user_first = $row['user_firstname'];
            $user_second = $row['user_lastname'];

        }



?>

<div class="form-group">
<label for="author">Post Author</label>
<input type="text" class="form-control" name = "post_author" value ="<?php echo $user_first . ' ' . $user_second ?>" readonly>
</div>

<div class="form-group">
<label for="status">Post Status</label>
<select class = "form-control" name="post_status">
<option value="draft">Select Status</option>
    <option value="draft">Draft</option>
    <option value="published">Publish</option>
</select>
</div>

<div class="form-group">
<label for="status">Post Tags</label>
<input type="text" class="form-control" name = "post_tags">
</div>


<div class="form-group">
<label for="status">Post Image</label>
<input type="file" name = "post_image">
</div>

<div class="form-group">
<label for="content">Post Content</label>
<textarea class="form-control" name = "post_content" id ="body" cols = "30" rows = "10"></textarea>
</div>

<div class="form-group">
<input class = "btn btn-primary" type="submit" name = "createPost" value = "Publish">
</div>

</form>

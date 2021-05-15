<!-- Blog Sidebar Widgets Column -->
  <div class="col-md-4">
<!-- Blog Search Well -->
<div class="well">
    <h4 style='color:#5cb85c;'>Blog Search</h4>
    <hr style='margin-top:0px; border-top:1px solid #5cb85c;'>
    <form action="search.php" method ="post">
    <div class="input-group">
        <input name = "search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name = "submit" class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
</form> <!--Search form -->
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<?php
if(!isset($_SESSION['username']))
{
    echo" <div class='well'>
    <h4 style='color:#5cb85c;'>Login</h4>
    <hr style='margin-top:0px; border-top:1px solid #5cb85c;'>
    <form action='includes/login.php' method ='post'>
    <div class='form-group'>
        <input name = 'username' type='text' class='form-control' placeholder = 'Enter Username Here'>
    </div>
    <div class='input-group'>
        <input name = 'password' type='password' class='form-control' placeholder = 'Enter Password Here'>
        <span class = 'input-group-btn'><button class = 'btn btn-primary' name = 'login' type = 'Submit'>Login</button></span>
    </div>
</form> <!--Search form -->
    <!-- /.input-group -->
</div>";
}

?>




<div class="well">
    <h4 style ='color:#5cb85c;'>Blog Categories</h4>
    <hr style='margin-top:0px; border-top:1px solid #5cb85c;'>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">

            <?php

            
                $query = "SELECT * FROM categories";
                $select_all_categories = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($select_all_categories))
                    {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo "<li><a style='color:#5cb85c;' href='index.php?c_id=$cat_id'>{$cat_title}</a></li>";
                    }
            ?>
            </ul>
        </div>
    </div>
    <!-- /.row -->
</div>


<!-- Side Widget Well -->
</div>
</div>
<!-- /.row -->
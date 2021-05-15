 <!-- Navigation -->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Ro's Blogs</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                <?php

                $query = "SELECT * FROM categories";
                $select_all_categories = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($select_all_categories))
                {
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    echo "<li><a style='color:#001f3f;'href='index.php?c_id={$cat_id}'>{$cat_title}</a></li>";
                }

                ?>

            <?php
                
                   

                    


                    if(isset($_SESSION['role']))
                        {
                            $role = $_SESSION['role'];
                            if($role == 'admin')
                                {

                                   echo" <li><a style='color:#001f3f'; href='admin'>Admin</a></li>";
                                    if(isset($_GET['p_id']))
                                        {
                                            $p_id =$_GET['p_id'];
                                            echo " <li><a style='color:#001f3f;' href='admin/posts.php?source=editPost&p_id={$p_id}'>Edit Post</a></li>";
                                        }
                                        
                                }
                            
                        }



                    ?>

                    <li><a style='color:#001f3f;' href="registration.php">Register</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a style='color:#001f3f;' href="aboutMe.php">About Me</a></li>
                    <li><a style='color:#001f3f;' href="contact.php">Contact Me</a></li>
                    <?php
                        
                        if(isset($_SESSION['username']))
                            {
                                $first = $_SESSION['firstname'];
                                $last = $_SESSION['lastname'];
                                $full = $first . ' ' . $last;

                                echo "<li class='dropdown'><a href='#' style ='color:black; background-color:green;' class='dropdown-toggle' data-toggle='dropdown'><i style ='color:black;' class='fa fa-user'></i> $full<b class='caret'></b></a>
                                <ul style ='color:#5cb85c; background-color:#001f3f;' class='dropdown-menu'>
                                <li>
                            <a href='profile.php'><i class='fa fa-fw fa-user'></i> Profile</a>
                             </li>
                             <li class='divider'></li>
                                <li>
                                    <a href='includes/logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
                                </li>
                                </ul>
                                </li>";
                            }
                        
                        ?>
                    </ul>
                   
                   


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
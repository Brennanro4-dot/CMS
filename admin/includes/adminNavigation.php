 <!-- Navigation -->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CMS Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <?php onlineCount(); ?>
            <li><a style='color:#001f3f;'href="../index.php">Home</a></li>
                <li class="dropdown">
                    <a style ='color:black; background-color:green;' href="#" class="dropdown-toggle" data-toggle="dropdown"><i style ='color:black;' class="fa fa-user"></i>  <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'];?> <b class="caret"></b></a>
                    <ul style = 'color:#5cb85c; background-color:#001f3f;' class="dropdown-menu">
                        <li>
                            <a style = 'color:#5cb85c;'  href="profile.php"><i style = 'color:#5cb85c;' class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a style = 'color:#5cb85c;'  href="../includes/logout.php"><i style = 'color:#5cb85c;' class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items  -->
            <div  class="collapse navbar-collapse navbar-ex1-collapse">
                <ul style="background:#212121 !important" class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-book"></i>  Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a style ="color:white;" href="./posts.php">View All Posts</a>
                            </li>
                            <li>
                                <a style ="color:white;" href="posts.php?source=addPost">Add Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./categories.php"><i class="fa fa-music"></i> Categories</a>
                    </li>
                    <li>
                        <a href="./comments.php"><i class="fa fa-comments"></i> Comments</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users" class="collapse">
                            <li>
                                <a style ="color:white;" href="users.php">View All Users</a>
                            </li>
                            <li>
                                <a style ="color:white;" href="users.php?source=addUser">Add User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-user"></i> Profiles</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
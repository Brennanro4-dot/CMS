<?php

function confirm($result)
    {
        global $connection;
        
        if(!$result)
                    {
                        die("Query Failed" . mysqli_error($connection));
                    }

        
    }

function selectAll()
    {
        global $connection;

        $query = "SELECT * FROM categories";
        $select_all_categories = mysqli_query($connection,$query);

    }

function insertCategory()
    {

        global $connection;

        if(isset($_POST['submit']))
        {
            $cat_title = $_POST['cat_title'];

            if($cat_title == "" || empty($cat_title))
                {
                    echo "This field should not be empty";
                }
            else 
                {
                    $query = "INSERT INTO categories(cat_title) ";
                    $query .= "VALUE('{$cat_title}') ";

                    $create_category = mysqli_query($connection, $query);

                        if(!$create_category)
                        {
                            die("Query Failed" . mysqli_error());
                        }
                }
        }

    }


function findAllCategoriesTable()
    {

        global $connection;

        $query = "SELECT * FROM categories";
        $select_all_categories = mysqli_query($connection,$query);
        
        
        while($row = mysqli_fetch_assoc($select_all_categories))
            {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                echo "<tr>";
                echo "<td>{$cat_id}</td>";
                echo "<td>{$cat_title}</td>";
                echo "<td><a href ='categories.php?delete={$cat_id}'><span style = 'color:red'><i class='glyphicon glyphicon-remove'></i></span></a></td>";
                echo "<td><a href ='categories.php?edit={$cat_id}'><span style = 'color:grey'><i class='glyphicon glyphicon-pencil'></i></span></a></td>";
                echo "</tr>";
                
            }
    }

function updateCategory()
    {

        global $connection;

        if(isset($_GET['edit']))
        {
            $cat_id = $_GET['edit'];

            include 'includes/updateCategories.php';
        }
    }

function deleteCategory()
    {
        global $connection;

        if(isset($_GET['delete']))
        {
           $del_cat_id =  $_GET['delete'];

           $query = "DELETE FROM categories WHERE cat_id = {$del_cat_id}";

           $delete_query = mysqli_query($connection, $query);
           header("Location: categories.php");
        }
    }

    function onlineCount()
        {
            global $connection;

            $session = session_id();
            $time = time();
            $time_out_in_seconds = 60;
            $time_out = $time - $time_out_in_seconds;

            $users_online_query = "SELECT * FROM users_online WHERE session = '{$session}'";
            $online_query = mysqli_query($connection,$users_online_query);
            $count = mysqli_num_rows($online_query);
           
            if($count == NULL)
                {
                    mysqli_query($connection,"INSERT INTO users_online (session,time) VALUES('{$session}','{$time}')");
                    
                }
            else
                {
                mysqli_query($connection,"UPDATE users_online SET time = '{$time}' WHERE session = '{$session}'");
                }
            
                 $users_online = mysqli_query($connection,"SELECT * FROM users_online WHERE time > $time_out");
                 $count_user = mysqli_num_rows($users_online);

                 echo"<li><a style='color:#001f3f;'>User Count: $count_user</a></li>";

            
        }

        function escape($string)
        {
            global $connection;
            return mysqli_real_escape_string($connection, trim($string));
        }


?>
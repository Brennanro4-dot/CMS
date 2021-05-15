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
                            Welcome to the Admin Section <?php echo $_SESSION['firstname'] ?>
                            
                        </h1>

                        <div class="col-xs-6">

                        <?php insertCategory();?>
                            <form action="" method="post">
                            <div class="form-group">
                                <label for ="cat_title">Add Category</label>
                                <input class = "form-control" type="text" name = "cat_title">
                            </div>
                            <div class="form-group">
                                <input class = "btn btn-primary" type="submit" name = "submit" value ="Add Category">
                            </div>
                            </form>
                        
                            <?php updateCategory();?>
                       
                            </div>

                        <div class="col-xs-6">

                        <?php selectAll();?>

                            <table class = "table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Catergory Title</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

            <?php  findAllCategoriesTable();?>

            <?php deleteCategory();?>
                                <tbody>       
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



 <?php include 'includes/adminFooter.php' ?>
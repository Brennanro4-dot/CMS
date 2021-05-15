<?php  include "includes/header.php"; ?>

    <!-- Navigation -->

    <?php  include "includes/navigation.php"; ?>


    <?php

    $message = '';

if(isset($_POST['submit']))
    {
        $to = "ronangabrennan@gmail.com";
        $subject = $_POST['subject'];
        $header =  $_POST['email'];
        $body =  $_POST['body'];
        $body .= '                  ';
        $body .= $header;

        $subject = wordwrap($subject,70);

        mail($to,$subject,$body);

       $message = "<p class = bg-success> Email sent Successfully. I will respond as soon as I can! :) </p>";

    }



?>

    <!-- Page Content -->
    <div class="container">

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h6><?php echo $message ?></h6>
                <h1 style="color:white;" class="text-center">Contact</h1>
                <hr style="border-top: 1px solid #5cb85c">
                    <form role="form" action="contact.php" method="post" id="contact-form" autocomplete="off">
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter your subject">
                        </div>
                         <div class="form-group">
                            <textarea name="body" id="body" class = "form-control" cols = "50" rows = "10"></textarea>
                        </div>

                        <input type="submit" name="submit" id="btn-contact" class="btn btn-dark btn-lg btn-block" value="Submit">
                    </form>

                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


<hr style="border-top: 1px solid #5cb85c">



<?php include "includes/footer.php";?>

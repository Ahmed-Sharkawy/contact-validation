<?php
// require "index.html";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Message = $_POST['Message'];

        $formEroores = [];

        if (strlen($username) == 0) {
            $formEroores[] = "A field cannot be left username blank";
        }
        if (strlen($email) == 0) {
            $formEroores[] = "A field cannot be left email blank";
        }
        if (strlen($phone) == 0) {
            $formEroores[] = "A field cannot be left phone blank";
        }
        if (strlen($Message) == 0) {
            $formEroores[] = "A field cannot be left Message blank";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Document</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <!-- start Form -->

        <section class="container">
            <h1 class="text-center">Contact Me</h1>
            <div class="formEroores">
                <?php
                    if (isset($formEroores)) {
                        foreach ($formEroores as $Eroor) {
                            echo $Eroor . "<br>";
                        };
                    };
                ?>
            </div>
            <form action="index.php" method="POST">
                <input class="form-control" type="text" name="username" placeholder="username">
                <input class="form-control" type="email" name="email" placeholder="email">
                <input class="form-control" type="text" name="phone" placeholder="phone">
                <textarea class="form-control" name="Message" placeholder="Your Message"></textarea>
                <input class="btn btn-success btn-block" type="submit" value="send Message">
            </form>
        </section>

        <!-- End Form -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
    
    </body>
</html>
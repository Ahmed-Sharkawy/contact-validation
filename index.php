<?php
// require "index.html";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Message = $_POST['Message'];
    // $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    // $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    // $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);;
    // $Message = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);;

    $formEroores = [];

    if (strlen($username) == 0) {
        $formEroores[] = "A field cannot be left <strong>username!</strong> blank";
    }
    if (strlen($email) == 0) {
        $formEroores[] = "A field cannot be left <strong>email!</strong> blank";
    }
    if (strlen($phone) == 0) {
        $formEroores[] = "A field cannot be left <strong>phone!</strong> blank";
    }
    if (strlen($Message) == 0) {
        $formEroores[] = "A field cannot be left <strong>Message!</strong> blank";
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

        <form action="index.php" method="POST">
            <?php if (!empty($formEroores)) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php
                    foreach ($formEroores as $Eroor) {
                        echo $Eroor . "<br>";
                    };
                    ?>
                </div>
            <?php } ?>
            <input class="form-control" type="text" name="username" placeholder="username" value="<?php if (isset($username)){echo $username;}?>">
            <input class="form-control" type="email" name="email" placeholder="email" value="<?php if(isset($email)){echo $email;} ?>">
            <input class="form-control" type="text" name="phone" placeholder="phone" value="<?php if(isset($phone)){echo $phone;} ?>">
            <textarea class="form-control" name="Message" placeholder="Your Message"><?php if (isset($Message)) {echo $Message;}?></textarea>
            <input class="btn btn-success btn-block" type="submit" value="send Message">
        </form>
    </section>

    <!-- End Form -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--CSS Stylesheet-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- START: PHP INCLUDE -->
    <?php require "./includes/db.php"; 
    echo "hello world!";
    ?>

    <!-- END: PHP INCLUDE -->

    <!-- START: HEADER -->

    <!-- END: HEADER -->

    <!-- Page Content Start -->
    

    <!-- Page Content End -->

    <!-- START: FOOTER -->
    <?php include "./includes/footer.php"; ?>
    <!-- END: FOOTER -->

    <!--BOOTSTRAP and LOCAL Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Javascript/main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- START: PHP INCLUDE -->
    <?php require "./includes/db.php"; ?>
    <!-- END: PHP INCLUDE -->

    <!-- START: HEADER -->
    <?php include "./includes/header.php"; ?>
    <!-- END: HEADER -->

    <!-- START: PAGE CONTENT -->
    <div class="container-fluid text-center">
    <p>Test text for content</p>
    </div>
    <!-- END: PAGE CONTENT -->

    <!-- START: FOOTER -->
    <?php include "./includes/footer.php"; ?>
    <!-- END: FOOTER -->

    <!--BOOTSTRAP and LOCAL Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
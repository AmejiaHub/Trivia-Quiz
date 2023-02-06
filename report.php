<?php
    require "./includes/data-collector.php"; // Muss zuerst sein wegen start_session()

    // Variable für den Index der aktuellen Frage vorbereiten
    // $lastQuestionIndex wird in data-collector.php vorbereitet.
    $currentQuestionIndex = $lastQuestionIndex +1;

    // Variablen für die hidden-Felder vorbereiten (lastPageID, quiz-last-question-index)
    $currentPageID = "question-" . $currentQuestionIndex;
?>

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

    <!-- START: HEADER -->
    <?php include "./includes/header.php"; ?>
    <!-- END: HEADER -->


    <!-- START: Page Content / FORMULAR "Fragestellung"-->
    <div class="row">
            <div class="col-sm-8">
                <!-- Fragestellung -->
                <h7> Congratulations!</h7>
                <h3> You achieved x out of possible y points.</h3>

            </div> 
            
            <button class="btn btn-primary" onclick="document.location='/index.php';">Neues Quiz</button>
        </div>
    
    <!-- END: Page Content -->


    <!-- START: FOOTER -->
    <?php include "./includes/footer.php"; ?>
    <!-- END: FOOTER -->

    
    <!--BOOTSTRAP and LOCAL Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Javascript/main.js"></script>
</body>
</html>
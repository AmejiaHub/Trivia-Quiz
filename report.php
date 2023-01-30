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
    <!-- Page Content Start -->
    <form id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
    <?php
    // Generiere Antwort-Radio-Buttons mit Beschriftung

    // Single-Choice: Hole den Namen der richtigen Antwortspalte in $correct, aus $question["$correct"]
    $correct = $question["correct"];

    for ($a= 1; $a <= 5; $a++) {
    // Setze für $answerColumnName den Namen der Tabellenspalte "answer-N" zusammen
    $answerColumnName = "answer-" . $a;

    // Falls überhaupt Antworttext in $question[$answerColumnName] gibt
    // und der Antworttext nicht gleich '', dann...
    if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
        // hole den Antworttext aus $question
        $answerText = $question[$answerColumnName];

        // Entscheide für $value, wieviele Punkte die Antwort ergibt:
        // richtig -> 1 Punkt, falsch = 0 Punkte
        if ($correct === $answerColumnName) $value = 1;
        else $value = 0;
    }

    }
    
    ?>
    <!-- Page Content End -->

    <!--BOOTSTRAP and LOCAL Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Javascript/main.js"></script>
</body>
</html>
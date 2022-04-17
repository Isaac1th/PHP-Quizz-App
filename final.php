<?php include './includes/init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>PHP Quizzer</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>You're Done!</h2>
                <p>Congrats! You have successfully completed the quiz!</p>
                <p>Final Score: <?php echo $_SESSION['score']; ?></p>
                <a href="./question.php?n=1" class="start">Take Again</a>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2022, Isaac Adis. All Rights Reserved
        </div>
    </footer>
</body>
</html>
<?php include './includes/init.php'; ?>
<?php include './DB/database.php' ?>

<?php 
    /**
     * Get Total Questions
     */
    $query = "SELECT * FROM questions";

    // Get results
    $results = $conn->query($query) or die($conn->error.__LINE__);
    $total = $results->num_rows;
?>

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
            <h2>Test you PHP Knowledge</h2>
            <p>This is a multiple choice quiz to test your knowledge of PHP</p>
            <ul>
                <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated Time: </strong><?php echo $total * 1; ?> Minutes</li>
            </ul>
            <a href="./question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2022, Isaac A. All Rights Reserved
        </div>
    </footer>
</body>
</html>
<?php include './includes/init.php'; ?>
<?php include './DB/database.php'; ?>

<?php
    // Set question number
    $number = (int) $_GET['n'];

    /**
     * Get total questions
     */
    $query = "SELECT * FROM `questions`";

    // Get results
    $results = $conn->query($query) or die($conn->error.__LINE__);
    $total = $results->num_rows;

    /**
     * Get Question
     */
    $query = "SELECT * FROM `questions`
              WHERE question_number = $number";
    
    // Get result
    $result = $conn->query($query) or die($conn->error.__LINE__);

    $question = $result->fetch_assoc();


    // /**
    //  * Get Question
    //  */
    $query = "SELECT * FROM `choices`
              WHERE question_number = $number";
    
    // Get results
    $choices = $conn->query($query) or die($conn->error.__LINE__);

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
            <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
            <p class="question">
                <?php echo $question['text']; ?>
            </p>

            <!-- Form -->
            <form action="./process.php" method="post">
                <ul class="choices">
                    <?php while($row = $choices->fetch_assoc()) : ?>
                        <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text'] ?></li>
                    <?php endwhile; ?>
                </ul>
                <input type="submit" value="Submit" name="submit">
                <input type="hidden" name="number" value="<?php echo $number; ?>">
            </form>
            
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2022, Isaac Adis. All Rights Reserved
        </div>
    </footer>
</body>
</html>
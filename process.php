<?php include './DB/database.php'; ?>
<?php include './includes/init.php'; ?>


<?php 

// Check to see if score is set_error_handler
if (!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if ($_POST['submit']){
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;

    /**
     * Get total questions
     */
    $query = "SELECT * FROM `questions`";

    // // Get results
    $results = $conn->query($query) or die($conn->error.__LINE__);
    $total = $results->num_rows;

    /**
     * Get correct choice
     */
    $query = "SELECT * FROM `choices`
              WHERE question_number = $number AND is_correct = 1";

    // Get result
    $results = $conn->query($query);

    // Get row
    $row = $results->fetch_assoc();

    // Set correct choice
    $correct_choice = $row['id'];

    // Compare
    if ($correct_choice == $selected_choice){
        // Answer is correct
        $_SESSION['score']++;
    }

    // Check if last question
    if ($number == $total){
        header("Location: final.php");
        exit();
    } else {
        header("Location: question.php?n=" . $next);
    }
}
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
            <div class="current">Question 1 of 5</div>
            <p class="question">
                What does PHP stand for?
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <li><input type="radio" name="chice" value="1">PHP: Hypertext Preprocessor</li>
                    <li><input type="radio" name="chice" value="1">Private Home Page</li>
                    <li><input type="radio" name="chice" value="1">Presonal Hypertext Preprocessor</li>
                    <li><input type="radio" name="chice" value="1">Personal Home Page</li>
                </ul>
                <input type="submit" value="Submit">
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
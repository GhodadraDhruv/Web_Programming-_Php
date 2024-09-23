<html>
<head>
    <title>Guess the Number</title>
</head>
<body>

<h2>Guess the Number</h2>
<form method="post">
    Enter your guess (1 to 10): <input type="number" name="guess" min="1" max="10" required><br><br>
    <input type="submit" value="Submit Guess">
</form>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $guess = intval($_POST['guess']);
    if (!isset($_SESSION['random_number'])) {
        $_SESSION['random_number'] = rand(1, 10);
    }
    $randomNumber = $_SESSION['random_number'];
    if ($guess == $randomNumber) {
        echo "<h3>Congratulations! You guessed the correct number: " . $randomNumber . ".</h3>";
        unset($_SESSION['random_number']);
    } else {
        echo "<h3>Sorry, the correct number was " . $randomNumber . ". Please try again!</h3>";
    }
}
?>

</body>
</html>
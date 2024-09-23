<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels</title>
</head>
<body>

<h2>Enter a Sentence</h2>
<form method="post">
    Sentence: <input type="text" name="sentence" required><br><br>
    <input type="submit" value="Count Vowels">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = $_POST['sentence'];
    $sentence = strtolower($sentence);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelCount = 0;
    for ($i = 0; $i < strlen($sentence); $i++) {
        if (in_array($sentence[$i], $vowels)) {
            $vowelCount++; 
        }
    }
    echo "<h3>The number of vowels in the sentence is: " . $vowelCount . "</h3>";
}
?>

</body>
</html>
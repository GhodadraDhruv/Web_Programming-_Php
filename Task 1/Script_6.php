<?php
$pageTitle = "Welcome to Atmiya University";
$boldText = "Welcome to Atmiya University";
$italicText = "Welcome to Atmiya University";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
    <p><b><?php echo htmlspecialchars($boldText); ?></b></p>
    <p><i><?php echo htmlspecialchars($italicText); ?></i></p>
</body>
</html>

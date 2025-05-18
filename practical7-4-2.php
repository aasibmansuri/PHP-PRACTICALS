<?php
    // Check if the data is posted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the values from the POST data
        $userName = $_POST['userName'];      // Visible input field data
        $hiddenMessage = $_POST['hiddenMessage'];  // Hidden field data
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processed Data</title>
</head>
<body>
    <h1>Information Received</h1>
    <p><strong>User Name:</strong> <?php echo htmlspecialchars($userName); ?></p>
    <p><strong>Hidden Message:</strong> <?php echo htmlspecialchars($hiddenMessage); ?></p>
</body>
</html>

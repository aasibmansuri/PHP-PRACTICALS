<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>
    <h1>Pass Information Using Hidden Variables</h1>
    <form action="practical7-4-2.php" method="POST">
        <!-- Visible Input Field -->
        <label for="userName">Enter your name:</label>
        <input type="text" id="userName" name="userName" required>
        <br><br>

        <!-- Hidden Input Field -->
        <input type="hidden" name="hiddenMessage" value="Hello from hidden field!">

        <button type="submit">Submit</button>
    </form>
</body>
</html>

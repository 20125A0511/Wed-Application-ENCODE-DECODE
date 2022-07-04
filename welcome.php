<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <table border="0" width="300" height="300">
        <tr><td>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
            </td>
            </tr>
        <tr><td>
    <a href="https://www.spidytechnology.com/html_encoder_and_decoder.html">encrypt and decrypt</a><br>
            </td></tr>
        <tr><td>
    <a href="logout.php">Logout</a>
            </td></tr>
        </table>
</body>
</html>
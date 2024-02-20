<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["seconds"])) { // if seconds are set the shutdown is executed
        $seconds = $_POST["seconds"];
        $command = "powershell.exe -Command \"shutdown /s /t $seconds\"";
        exec($command);
    } elseif (isset($_POST["message"]) && isset($_POST["title"])) { //if message and title are set the command for the message box is executed
        $message = $_POST["message"];
        $title = $_POST["title"];
        $command = "powershell.exe -Command \"Add-Type -AssemblyName System.Windows.Forms; [System.Windows.Forms.MessageBox]::Show('$message', '$title')\"";
        exec($command);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>RCP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>RCP</h1>

    <div class="container">
        <h2>Shutdown</h2>
        <form action="index.php" method="post">
            <label for="seconds">Shutdown in seconds</label><br>
            <input type="number" id="seconds" name="seconds"><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="container">
        <h2>Message Box</h2>
        <form action="index.php" method="post">
            <label for="title">Enter Title:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="message">Enter Message:</label><br>
            <input type="text" id="message" name="message"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

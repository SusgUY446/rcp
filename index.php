<!DOCTYPE html>
<html>
<head>
    <title>RCP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Remote Control Panel</h1>

    <div class="container">
        <h2>Shutdown</h2>
        <form action="shutdown.php" method="post">
            <label for="seconds">Shutdown in seconds</label><br>
            <input type="number" id="seconds" name="seconds"><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="container">
        <h2>Message Box</h2>
        <form action="msg_box.php" method="post">
            <label for="title">Enter Title:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="message">Enter Message:</label><br>
            <input type="text" id="message" name="message"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

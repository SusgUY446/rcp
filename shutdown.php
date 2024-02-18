<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seconds = $_POST["seconds"];

    $command = "powershell.exe -Command \"shutdown /s /t $seconds\"";
    exec($command);
}
?>
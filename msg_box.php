<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $title = $_POST["title"];
    $command = "powershell.exe -Command \"Add-Type -AssemblyName System.Windows.Forms; [System.Windows.Forms.MessageBox]::Show('$message', '$title')\"";
    exec($command);
}
?>


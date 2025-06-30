<?php
$logFile = 'output.log';

if (!file_exists($logFile)) {
    file_put_contents($logFile, '');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['key'])) {
    $userKey = trim($_POST['key']);
    if (!empty($userKey)) {
        $timestamp = date("Y-m-d H:i:s");
        $log = "[$timestamp] $userKey\n";
        file_put_contents($logFile, $log, FILE_APPEND | LOCK_EX);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keylogger</title>
</head>
<body>
    <h1>Keylogger App</h1>
<textarea id="user_input" rows="5" cols="40" placeholder="Start typing..."></textarea><br><br>
    <button type="button">Enter</button> 

    <script>
        const input = document.getElementById("user_input");

        input.addEventListener("keydown", function(e) {
            const key = e.key;

            //Send the key to PHP
            fetch("", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "key=" + encodeURIComponent(key)
            });
        });
    </script>
</body>
</html>

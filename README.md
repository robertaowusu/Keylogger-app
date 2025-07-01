PHP Keylogger (Real-Time)

This is a basic keylogger built using PHP, HTML, and JavaScript. It captures every key the user types in a textarea and saves them with timestamps into a file called `output.log`.



 How It Works

As the user types, each keystroke is sent to a PHP script in the background.
The PHP script records the keys in a log file with a timestamp.



Files Included
`index.html` and PHP code combined in one file
`output.log` – created automatically to store the keys

How to Run It

1. Install XAMPP or any server that can run PHP.
2. Place the code in a folder inside `htdocs` (like `C:/xampp/htdocs/keylogger`).
3. Start Apache in XAMPP.
4. Open your browser and go to: http://localhost/php%20lessons/PHP%20Keylogger/keylogger.php
5. Start typing in the box — the keys will be saved in real time.

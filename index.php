<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PasswordGenerator</title>
</head>
<body>

<?php

use Manue\Pwd\Password;

require 'vendor/autoload.php';

$passwd = new Password();
echo "Ihr Passwort lautet" . " " . $passwd->generate();
echo "<br>";
echo "2. Passwort lautet" . " " . $passwd->generate();
?>
</body>
</html>


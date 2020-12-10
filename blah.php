<?php

header('Content-Type: application/json');

echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';

?>
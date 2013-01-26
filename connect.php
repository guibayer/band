<?php
$conn = @mysql_connect("localhost", "root", "guilherme") or die ("Nome de usuario ou senha incorretos!");
$db = @mysql_select_db("band", $conn) or die ("Base de dados inesistente!");
?>
<?php

$db = new SQLite3('prueba.db');

$version = $db->querySingle('SELECT SQLITE_VERSION()');

echo $version . "\n";
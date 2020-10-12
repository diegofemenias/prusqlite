<?php

$db = new SQLite3('prueba.db');

$db->exec("CREATE TABLE tablaprueba(id INTEGER PRIMARY KEY, txt1 VARCHAR, txt2 VARCHAR)");
$db->exec("DELETE FROM tablaprueba");

for($x=0; $x<10000; $x++)
{
    $db->exec("INSERT INTO tablaprueba(txt1, txt2) VALUES('" . md5($x) . "','" . md5($x+1) . "');");
}

$last_row_id = $db->lastInsertRowID();

echo "The last inserted row Id is $last_row_id";




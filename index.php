<?php
$db = new SQLite3('prueba.db');

$db->exec('pragma synchronous = off;');

//$db->exec("CREATE TABLE tablaprueba(id INTEGER PRIMARY KEY, txt1 VARCHAR, txt2 VARCHAR)");
echo "<br>Comienza escritura " . microtime(TRUE);

//$db->exec("DELETE FROM tablaprueba");
//echo "<br>" . microtime(TRUE);

for($x=0; $x<100; $x++)
{
    $db->exec("INSERT INTO tablaprueba(txt1, txt2) VALUES('" . md5($x) . "','" . md5($x+1) . "');");
    //echo "<br>Registro: " . microtime(TRUE);

}
echo "<br>Termino escritura " . microtime(TRUE);
$last_row_id = $db->lastInsertRowID();
echo "<br>The last inserted row Id is $last_row_id";

echo "<br>Comenzo lectura " . microtime(TRUE);
$db->exec("SELECT * FROM tablaprueba WHERE txt1 like '%a%'");
echo "<br>Termino lectura " . microtime(TRUE);








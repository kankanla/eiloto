<?php

$db_user = 'root';
$db_ps = 'toor';
$db_host = 'localhost';
$db_name = 'db_name';
$db = new mysqli($db_host, $db_user, $db_ps, $db_name);

echo ('<pre>');
var_dump($db);
echo ('</pre>');


$db2 = new SQLite3("loto.db");
$results = $db2->query('select * from loto6 limit 10');
var_dump($results);
echo ('<pre>');
while ($row = $results->fetchArray()) {
    var_dump($row);
}
echo ('</pre>');

print_r(SQLite3::version());

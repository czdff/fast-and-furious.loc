<?php

$db = new mysqli('localhost', 'root', '', 'FAF');
if (!$db->connect_errno) {
    $q = "SELECT id,name,lastname FROM Actors ";
    $res = $db->query($q);
    if ($res) {
	$actors = array();
	while ($actor = $res->fetch_assoc()) {
	    $actors[] = $actor;
	}
    }
}
var_dump($actors);
echo '<table cellpadding="5" cellspacing="0" border="1"><tr><td>id</td><td>Имя</td><td>Фамилия</td><td>Подробности</td>';

foreach ($actors as $one) {
    echo '<tr>';
    foreach ($one as $sValue) {
	echo "<td>{$sValue}</td>";
    }
    echo '</tr>';
}
echo '</table>';

<?php

$json = '{"a":"abeille","b":"banane","c":"chocolat","d":"dauphin","e":"ecole"}';
$array = json_decode($json);
var_dump($array);

function existe($arr, $string)
{
    $test = '';
    foreach ($arr as $key => $value) {
        if ($string === $value) {
            $test = 'true';
        }
    }
    if ($test) {
        echo '<br>true<br>';
    } else {
        echo '<br>false<br>';
    }
}
existe($array, 'dauphin');
existe($array, 'requin');

echo '<table>';
echo '<tr>';

foreach ($array as $key => $value) {
    echo '<tr>';
    echo '<td>' . $key . '</td>';
    echo '<td>' . $value . '</td>';
    echo '<td>' . strtoupper($value) . '</td>';
    echo '<td>' . $value . '</td>';
    echo '<td>' . strlen($value) . '</td>';
    echo '</tr>';
}

echo '</table>';

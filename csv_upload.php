<?php
// print_r($_FILES);

$file = fopen($_FILES['csv']['tmp_name'], 'r');
$line_arr = [];
while(($line = fgetcsv($file)) !== false) {
    array_push($line_arr, $line);
    // print_r ($line);
    // print_r($line[3]);
}

print_r($line_arr[13][2]);

fclose($file);

?>
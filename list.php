<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
$file_list = glob('test/1.json');
foreach ($file_list as $key => $file) {
$file_test = file_get_contents($file);
$decode_file = json_decode($file_test, true);
foreach ($decode_file as $test) {
$question = $test['question'];
echo "<a href=\'test.php?test=$key\'>$question</a><br>";
}
}
?>

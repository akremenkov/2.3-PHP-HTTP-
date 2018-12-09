<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$file_list = glob('test/1.json');

 $test = [];
 foreach ($file_list as $key => $file) {
     if ($key == $_GET['test']) {
         $file_test = file_get_contents($file_list[$key]);
         $decode_file = json_decode($file_test, true);
         $test = $decode_file;
     }
 }
$question = $test[0]['question'];
$answers = $test[0]['answers'];


?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form enctype="multipart/form-data" action=" " method="POST">
    <div>Answer<div>
    <br />
    <input name="answer" type="number" />
    <br />
    <br />
    <input type="submit" value="send">
    </form>

  </body>
</html>

<?php

foreach ($_POST as $key => $item) {
        if ($answers[0][$key]['result'] === true) {
      echo "right";
    }else{
      echo "wrong";

?>

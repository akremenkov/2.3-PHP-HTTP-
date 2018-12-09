<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form enctype="multipart/form-data" action=" " method="POST">
    <div>TEST<div>
    <br />
    <input name="test" type="file" />
    <br />
    <br />
    <input type="submit" value="send">
    </form>

  </body>
</html>

<?php


if (!empty($_FILES)) {
   if (array_key_exists ('test', $_FILES)) {
      $dir = mkdir('test/');
      $file = fopen("test/1.json","a");
      fclose($file);
      move_uploaded_file ($_FILES ['test'] ['tmp_name'], 'test/1.json');
      echo "File has been downloaded";
    }
      else {
      echo "Loading error";
    }
   }

$link_address = 'list.php';
echo "<a href='$link_address'>Test Page</a>";

 ?>

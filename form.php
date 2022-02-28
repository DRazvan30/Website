<!DOCTYPE html>
<html>
<head>
  <title>formular</title>
</head>
<body>
  <form method="post">
    Introduceti datele:<br>Nume:
    <input type="text" name="textdata1"><br>Prenume:
    <input type="text" name="textdata2"><br>Specializarea:
    <input type="text" name="textdata3"><br>
    <input type="submit" name="submit">
    
  </form>
</body>
</html>
<?php
              
if(isset($_POST['textdata1']))
{
$data=$_POST['textdata1'];
$fp = fopen('TextFile1.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['textdata2']))
{
$data=$_POST['textdata2'];
$fp = fopen('TextFile1.txt', 'a');
fwrite($fp, $data );
fclose($fp);
}

if(isset($_POST['textdata3']))
{
$data=$_POST['textdata3'];
$fp = fopen('TextFile1.txt', 'a');
fwrite($fp,  $data);
fclose($fp);
}
?>
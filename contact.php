<?php

$x=mysql_connect("localhost", "DMocan", "Bobi270900");
if(!$x)
die ('Nu s-a realizat conectarea'.mysql_error());

$y=mysql_select_db("DMocan", $x);
if(!$y)
die('Baza de date nu poate fi accesata'. mysql_error());

$nume=$_POST['nume'];
$email=$_POST['email'];
$subiect=$_POST['subiect'];
$mesaj=$_POST['mesaj'];


$z=mysql_query("INSERT INTO DMocan.CONTACT(nume,email,subiect,mesaj)
VALUES ('$nume','$email', '$subiect', '$mesaj')",$x);
if(!$z)
     die('Inserarea nu a putut fi realizata'.mysql_error());
echo 'Inserarea s-a realizat!';
mysql_close($x);
?>

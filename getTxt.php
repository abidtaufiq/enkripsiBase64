<?php
$enkripsi = $_POST['txt'];

header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=Encrypt-base64-BugaBagi.txt");

echo $enkripsi;
 ?>
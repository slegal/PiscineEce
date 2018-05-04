<?php
session_start();

$database='linkece';
$db_handle=mysqli_connect('localhost', 'root','');
$db_found=mysqli_select_db($db_handle,$database);





mysqli_close($db_handle);

?>
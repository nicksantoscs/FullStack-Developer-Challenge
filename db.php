<?php
// Connect to AWS MySQL server
$db = new PDO('mysql:host=172.31.22.43;dbname=Rich100', 'Rich100', 'x');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php

$host = 'cudb.wrlc.org';
$user = 'uptime';
$pass = '2LcVpuZqRshGCDUV';
$data = 'uptime';
$sSetting['refresh'] = "10000";

try
{
$conn = new PDO("mysql:host=".$host.";dbname=".$data, $user, $pass);
}
catch(PDOException $pe)
{
die('Could not connect to the database because: ' .$pe->getMessage());
}


//mysql_select_db($data) or die(mysql_error());
//Template options: "default" and "dark"
$template = "./templates/default/";
$index = $template . "index.php";
?>
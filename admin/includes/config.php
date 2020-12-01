<?php 
// DB credentials.
define('DB_HOST','bpnpbp38xxzmisesnrgx-mysql.services.clever-cloud.com');
define('DB_USER','uaiotj20bpooqzk8');
define('DB_PASS','mSI3MNmDapEWPD0CoYIy');
define('DB_NAME','bpnpbp38xxzmisesnrgx');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
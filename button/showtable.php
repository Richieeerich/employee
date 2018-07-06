
<?php

	require_once 'db_config.php';

session_start();

$username = $_POST['username'];
$password = $_POST['pass'];

if($_POST['Submit']){
if($username&&$password)
{
$query = mysql_query("SELECT * FROM users WHERE name="$usename");
$numrows = mysql_num_rows($query);
if($numrows!=0)
{
    while ($row = mysql_fetch_assoc($query))
    //while ($row = mysql_fetch_array($query))
    {
        $dbuserid = $row['name'];
        $dbusername = $row['gender'];
        $dbpassword = $row['language'];
    }


echo"$sql";

}
}
}
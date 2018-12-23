<?php
$username =$POST['username'];
$username =$PSOT['password'];

$username =stripslashes($username);
$password = stripslashes($password);
$username=mysql_real_escape_string($username);
$password= mysql_real_escape_string($password);

mysql_connect('locahost:81','root','');
mysql_select_db('testdb');

$result= mysql_query("select *from account where username ='$username' and password = '$password'")
or die("failed to query database ".mysql_error());
$row= mysql_fetch_array($result);
if($row['username'] ==$username && $row['password']==$password)
{
	echo"Login successful Welcome "$row['username'];
}else
{
	echo"Failed to login";
}
?>
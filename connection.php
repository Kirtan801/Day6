<?php
$host ="localhost";
$username = "root";
$passwd = "";
$dbname = 'db_internship';
//Connection Function
mysqli_connect($host, $username, $passwd, $dbname);

$connection=mysqli_connect($host, $username, $passwd, $dbname);

$q=mysqli_query($connection, "insert into tbl_user(user_name,user_gender,user_mobile) values('Kirtan','Female','9824316701')") 
        or die("Error".mysqli_error($connection));

if($q)
{
echo"<script>alert('Record Added');</script>";
}
?>
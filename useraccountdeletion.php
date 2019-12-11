
<form method="POST" />
Enter the user name<input type="text" name="user"/><br><br>
<input type="submit" name="submit"/>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['user'];
    
$hn='localhost';
$db='suriya';
$un='root';
$pw='';
$name=$_POST['user'];

$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)  die($conn->connect_error);
$query="delete from name where name='$name'";
$result=$conn->query($query);
if($result>0)
    echo"user name deleted";
}
?>

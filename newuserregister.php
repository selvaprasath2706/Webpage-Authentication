<h2 align="center"> Welocme to new user regitation</h2>
<form method="POST" /><h3 align="center">
    Enter the user name<input type="text" name="user"/><br><br>
    Enter the password <input type="password" name="pass"/><br><br>
<input type="submit" name="submit"/>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['user'];
    $pass=$_POST['pass'];
$hn='localhost';
$db='suriya';
$un='root';
$pw='';
$name=$_POST['user'];
$pass=$_POST['pass'];
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)  die($conn->connect_error);
$query="insert into name values('$name','$pass')";
$result=$conn->query($query);
if($result>0)
{
    echo"User name created";
    header('location:userhome.php');
}
else
{
    echo"Unexpected error occured please try again";
}
}
?>

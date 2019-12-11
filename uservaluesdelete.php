
<h1 align="center">Welcome</h1>
<h2 align="right"><a href="userhome.php"/>Logout</a></h2>
<h2 ALIGN="center">
            <a href="usercreation.php"/>Add user&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="uservalues.php"/>Data Enter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="userdisplay.php"/>Display Data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="uservaluesalter.php"/>Alter data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="uservaluesdelete.php"/>Delete user data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="userdelete.php"/>Delete user account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
</h2>
<form method="POST" />
<h2 align="center"/>
Enter the name<input type="text" name="name"/><br><br>
Enter the Semester<input type="text" name="sem"/>
<input type="submit" name="submit" value="submit"/></h2>
<?php
if(isset($_POST['submit']))
{
$hn='localhost';
$db='marks';
$un='root';
$pw='';
$sem=$_POST['sem'];
$name=$_POST['name'];
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)  die($conn->connect_error);
$query="delete from $name where id='$sem'";
$result=$conn->query($query);
if($result>0)
{
    echo"Record deleted";
}

}

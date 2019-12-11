<html>
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

<form method="POST"/><h2 align="center">
Enter your Name<input type="text" name="name"/><br><br>
Enter the Gpa<input type="text" name="gpa"/><br><br>
Enter the Semester<input type="text" name="sem"/><br><br>
<input type="submit" name="submit"/></h2>
<?php
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $gpa=$_POST['gpa'];
   
$conn = new mysqli('localhost','root', '', 'marks');
if($conn->connect_error) die($conn->connect_error);
$query="update $name set gpa='$gpa' where name='$name'";
$result=$conn->query($query);
if($result>0)     
    echo"change successful";
else
    echo"Sorry for the unexpected error";
}
?>

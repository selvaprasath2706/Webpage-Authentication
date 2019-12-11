<html>
<h1 align="center">Welcome</h1>
<h2 align="right"><a href="userhome.php"/>Logout</a></h2>
<h2 align="center">
            <a href="usercreation.php"/>Add user&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="uservalues.php"/>Data Enter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="userdisplay.php"/>Display Data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="uservaluesalter.php"/>Alter data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="uservaluesdelete.php"/>Delete user data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="userdelete.php"/>Delete user account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
</h2>
<form method="POST"/><h2 align="center">
Enter your Name<input type="text" name="name"/><br><br>
    <input type="submit" name="submit"/></h2>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $conn=new mysqli('localhost','root','','marks');
    $query="select * from $name";
$result=$conn->query($query);
if($result)
{ 
    $rows=$result->num_rows;
    echo"<table align='center'><tr><th>Semester</th><th>Name</th><th>Gpa</th><th></tr>";
for($j=0;$j<$rows;$j++)
{
    $result->data_seek($j);
    $row=$result->fetch_array(MYSQLI_NUM);
    echo"<tr>";
    for($k=0;$k<3;++$k)
    {
    echo"<td>$row[$k]</td>";
    }
    echo"</tr>";
}
echo"</table>";

}
else
{
    echo"name not found";
    }
}
?>
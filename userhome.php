<h1 align="center">Welcome selva prasath website</h1>
<h2 align="right">Not an existing user <a href="newuserregister.php"/> New user registration</a></h2>
  
<form method="POST"/>
<h1 align="center">
    <br>
<br>Enter the user name<input type="text" name="user"/><br>
<br><br>Enter the password <input type="password" name="pass"/><br>
<br><br><br><input type="submit" name="submit" value="login"/></h1>
 <?php
if(isset($_POST['submit']))
{
    $name=$_POST['user'];
    $pass=$_POST['pass'];
    $conn=new mysqli('localhost','root','','suriya');

    $query="SELECT * FROM name where name='$name'";
    $result=$conn->query($query);
    $rows=$result->num_rows;
    for($j=0;$j<$rows;++$j)
    {
    $result->data_seek($j);
    $row=$result->fetch_array(MYSQLI_NUM);
    for($i=0;$i<2;++$i)
    {
           $name1=$row[0];
           $pass1=$row[1];
    
    if(($name==$name1)&&($pass1==$pass))
    {
  header('location:homeformat.php');    
   break; 
    }
 else {
    echo"user name invalid";    
    break;
    }
           
    }
    
    }
}
?>
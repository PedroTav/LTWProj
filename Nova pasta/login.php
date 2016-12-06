<!DOCTYPE html>
<html>
<?php

//Valores passados no form
$username = $_POST['user'];
$password = $_POST['pass'];


//Conexao com servidor e base de dados
mysql_connect("localhost" , "root", "");
mysql_select_db("login");

//Encontra utilizador
$result = mysql_query("select" from users where username = "$username" and password = "$password")
or die("Unable to find user" .mysql_error());

$row = mysql_fetch_array("$result");

if($row['username'] == $username && $row['password'] == $password  ){
  echo "Login Success! Welcome " .$row['username'];

}
  else{
    echo "Failed to login!";
  }

?>
</html>

 <?php

  define('DB_SERVER', 'shareddb1c.hosting.stackcp.net');
define('DB_USERNAME', 'test-1947-3230c977');
define('DB_PASSWORD', 'password123');
define('DB_DATABASE', 'test-1947-3230c977');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   session_start();
   
   $user_check = $_SESSION['login_user'];
      $ses_sql = mysqli_query($db,"select username from login where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>

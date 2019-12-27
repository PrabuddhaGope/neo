<?php
  session_start();
  // error_reporting(E_ALL);
  // ini_set('display_errors', '1');

  if(isset($_POST['login'])){
    require "dbconnect.php";
    $ref=@$_GET['q'];
    $Email = $con->real_escape_string($_POST['Email']);
    $Password = $con->real_escape_string($_POST['Password']);

    if($Email=="" || $Password==""){
      echo "Please fill all the details";
    }else{
      $login = mysqli_query($con,"SELECT * FROM USER WHERE Email='$Email'");
      $num = mysqli_num_rows($login);
      if($num>0){
        $data = mysqli_fetch_array($login);
        $_SESSION['Name'] = $data['Name'];
        $_SESSION['Email'] = $Email;
        header('location:../admin/account.php?q=1');
      }
    }
  }

?>

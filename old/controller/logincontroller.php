<?php

session_start();

require "../model/db_connect.php";

//define("filepath", "fileIO.txt");



if(isset($_POST["submit"]))
{
  login();
}

function login(){
global $con;

$err_uname="";
$err_psw="";
$err_invalid="";
$errmassage="";

$login = "";
$psw="";
$uname="";
$usernameErr = $passwordErr = "";
$flag=false;




  if(empty($_POST['username']))
  {
    $err_uname="**Username Required";
    $flag=true;
echo $err_uname;

  }
   else{
    $uname=$_POST['username'];
  }
  echo "<br>";

  if(empty($_POST['password']))
  {
    $err_psw="**Password Required";
    $flag=true;
echo $err_psw;

  }
 else{
    $psw=$_POST['password'];
  }

  if(!$flag)
      {


 $query = "SELECT * from admin where userid='$uname' and password='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["userid"];

      header("Location:../view/dashboard.php");
    }
    else
    {
echo '<script>alert("Please check your userid and Password")</script>';
    }





    /*  $username = input_data($_POST["username"]);
      $password = input_data($_POST["password"]);

      $fileData = read();
      $users=json_decode($fileData);
  	foreach($users as $user)
  	{
  	if($user->username === $username && $user->password === $password)
  	$flag = true;
  	}
      if($flag)
      {
        session_start();
        $_SESSION['name']=$username;

  	header("Location: ../view/dashboard.php");
      }
      else
      {
  	$err_invalid =  "Invalid Id";
    echo "$err_invalid";
      }
      }*/
  }

}

    function input_data($data)
    {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }


    function read() {
    $file = fopen(filepath, "r");
    $fz = filesize(filepath);
    $fr = "";
    if($fz > 0) {
    $fr = fread($file, $fz);
    }
    fclose($file);
    return $fr;
    }















































?>

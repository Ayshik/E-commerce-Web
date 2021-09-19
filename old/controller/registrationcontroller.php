<?php
 require_once '../model/db_connect2.php';
  if(isset($_POST['submit']))
  {
    signup();
  }















function signup ()
{
  $name=$email=$uname=$pass=$conf_pass=$phone=$nid=$address=$tid=$pln="";
$name_err=$email_err=$pass_err=$uname_err=$nid_err=$phn_err=$add_err=$conf_pass_err=$tid_err=$pln_err="";
$flag = 1;

  if(empty($_POST['name']))
  {
      $name_err="**NAME CAN NOT BE EMPTY";

  $flag = 0;
  echo $name_err;
  }else
  {
    $name=$_POST['name'];
  }
 
  if(empty($_POST['uname']))
  {
      $uname_err="**USER ID CAN NOT BE EMPTY";
  $flag = 0;
    echo $uname_err;
  }else{
    $uname=$_POST['uname'];
  }
  if(empty($_POST['pass']))
  {
      $pass_err="**PASSWORD CAN NOT BE EMPTY";
  $flag = 0;
    echo $pass_err;
  }
  else{
    $pass=$_POST['pass'];
  }
  if(empty($_POST['conf_pass']))
  {
      $conf_pass_err="**CONFIRM PASSWORD CAN NOT BE EMPTY";
  $flag = 0;
    echo $conf_pass_err;
  }else{
    $conf_pass=$_POST['conf_pass'];
  }
 
  if(empty($_POST['phone']))
  {
    $phn_err="**NUMBER CAN NOT BE EMPTY";
  $flag = 0;
    echo $phn_err;
  }else{
    $phone=$_POST['phone'];
  }

  if(empty($_POST['tid']))
  {
    $tid_err="**Date Of Birth CAN NOT BE EMPTY";
  $flag = 0;
    echo $tid_err;
  }else{
    $tid=$_POST['tid'];
  }


  if($pass != $conf_pass)
  {
    $pass_err="**PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH";
    $flag = 0;
      echo $pass_err;
  }
if($flag)
	{ 
         
$query="INSERT INTO admin(name,userid,password,dob,phone) VALUES ('$name','$uname','$conf_pass','$tid','$phone')";
//echo $query;
execute($query);
 header("Location:../View/login.php");




	}
	else
	{
		echo '<script>alert("Unsuccessfull Try Again")</script>';
		}
         

















}















?>

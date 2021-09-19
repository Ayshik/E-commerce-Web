<?php


$err_uname="";
$err_psw="";
$err_invalid="";
$errmassage="";
$flag=false;
$login = "";
$usernameErr = $passwordErr = "";


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style>
 body{
 background-color:#87c6ec;
 }
 </style>
<body>
	<form method="post" action="../controller/logincontroller.php">
			<center>
    <table border="1" width="1000px">
	    <tr>
            <td>
                <table width="1000px">
                    <tr>
						<td align="Left">
                <h3><b>Welcome To Medical Service</b></h3>
            </td>
            <td align="Right">
               
                <a href="login.php">Login</a> |
                <a href="registration.php">Registration</a>
            </td>
                    </tr>
                    </table>
            </td>
        </tr>

        <tr>
            <td colspan="2">
			<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username :<input type="text" name="username"></td>
				<?php echo $err_uname;?>
				</tr>

				<tr>
					<td>Password : <input type="password" name="password"></td>
					 <?php echo $err_psw;?>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
                </tr>
			</table>
            </td>
        </tr>
		<?php
   echo "<h1>". $err_invalid . "</h1>" ;

  ?>
        <tr>
            <td colspan="2">
                <center>
                <b>Copyright © Zakia MIM</b>
                </center>
            </td>
        </tr>
    </table>
    </center>

	</form>
</body>
</html>

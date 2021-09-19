<?php

$name=$email=$uname=$pass=$conf_pass=$phone=$nid=$address=$tid=$pln="";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<style>
 body{
 background-color:#87c6ec;
 }
 </style>
<body>
<form method="post" action="../controller/registrationcontroller.php" enctype="multipart/form-data">
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
			<legend>Registration</legend>
			<table>
           
					<td>Name:</td>
					<td><input type="text" name="name" ></td>

				</tr>
				<tr>
                   <td colspan="2"><hr></td>
                </tr>
                <tr>
					<td>User ID:</td>
					<td><input type="text" name="uname"></td>
					
				</tr>
                <tr>
                   <td colspan="2"><hr></td>
                </tr>



						   


				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass"></td>
					
				</tr>

				<tr>
                   <td colspan="2"><hr></td>
                </tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="conf_pass"></td>
					
				</tr>
                <tr>
                   <td colspan="2"><hr></td>
                </tr>

				<tr>
					<td>Phone Number:</td>
					<td><input type="number" name="phone"></td>
					
				</tr>

                <tr>
                   <td colspan="2"><hr></td>
                </tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" name="tid"></td>
					
				</tr>

               
				
                    </fieldset>
					<hr>
					</td>
                </tr>
                <tr>
                   <td colspan="2"><hr></td>
                </tr>

				<tr>
					<td><input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
            </td>
        </tr>
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

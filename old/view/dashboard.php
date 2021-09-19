<?php
 

session_start();
 
setcookie("test_cookie", "test", time() + 3600, '/');
include('../Controller/userval.php');
if (!isLoggedIn()) {
 
 //header('location:login.php');
}
?>




<html>
<head>
	<title> DashBoard </title>
</head>
<style>
 body{
 background-color:#87c6ec;
 }
 </style>
<body>

    <form >
 <tr height= "80%">
            <td width = "30%"  valign= "top">
            <center><h2>Admin Dashboard</h2></center>

            <hr>


                    <ul type= "disc" >
                   
                    <li> <a href= "../Controller/logout.php"> Logout </a> </li>
                    </ul>

            </td>
           
        
       
            <td colspan=2 valign= "top" align= "center" >
                <h2> Welcome <?php echo $_SESSION["loggedinuser"];?> </h2>
            </td>
       
</tr>
        <tr>
            <td colspan=3>
            <center>
            <b>Copyright © Zakia MIM</b>
            </center>
            </td>
        </tr>
        </table>
    </form>

</body>
</html>

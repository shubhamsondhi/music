<?php
include'head.php'
    ?>
       <?php
   
include("dbconfig.php");
extract($_POST);
if(isset($submit))
{
    $rs=mysqli_query($conn,"SELECT * FROM `usertable` WHERE user_email='$email' and user_password='$pass'");
    
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["user"]=$email;
        
        header("location:index.php");
	}
}



?>

       <div class="container">
        <div class="col-md-6 form " >
        <form method="post">
    <table class="table">
        <tr>
            <td>Email</td>
            <td><input type="text" class="form-control" id="username" name="email" required>
        </tr>
        <tr>
        <td>Password</td>
            <td><input type="password" class="form-control" id="password" name="pass" r required>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name="submit" class="btn btn-info">    <a href="create_user.php">Sign Up</a></td></tr>
            </table>
            </form>
</div>
    
    
    </div>
    
    
    <?php include 'footer.php' ?>
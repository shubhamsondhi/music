<?php
include'head.php'
    ?>
       <?php
   
include("dbconfig.php");
extract($_POST);
if(isset($submit))
{
    
	if($email=="admin" and $pass=="admin")
	{
        $_SESSION["admin"]=$email;
        
        header("location:index.php");
		
	}
	else
	{
		$found="N";
	}
}



?>

       <div class="container">
        <div class="col-md-6 form " >
        <form method="post">
    <table class="table">
        <tr>
            <td>Username</td>
            <td><input type="text" class="form-control" id="username" name="email" required>
        </tr>
        <tr>
        <td>Password</td>
            <td><input type="password" class="form-control" id="password" name="pass"  required>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name="submit" class="btn btn-info"></td></tr>
            </table>
            </form>
</div>
    
    
    </div>
    
    
    <?php include '../footer.php' ?>
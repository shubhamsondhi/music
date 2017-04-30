<?php
     include "head.php";
     include "dbconfig.php";
include 'check.php';
 $sucess="";
     if(isset($_POST['submit']))
     {
        
extract($_POST);
       
     $sql="INSERT INTO `admin` (`name`, `email`, `city`, `password`) VALUES ('$name', '$email', 'local', '$pass')";
     if(mysqli_query ($conn,$sql))
     {
        
     $sucess="Sucessfully Inserted";
     }
     }
     ?>
<center><form method="post" enctype="multipart/form-data">
<div class="container">
<br><br><br>
        <div class="row">
            <div class="col-md-8">

                <div class="row carousel-holder">
    <table class="table">
    <tr>
        <td>Name</td>
        <td><input type="type" id="name" name="name" class="form-control" required>        
        </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" id="email" name="email" class="form-control" required>
        </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" id="pass" name="pass" class="form-control" required>
            </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="submit" value="submit" class="form-control" required> <?php echo $sucess ?>        </tr>
        
        
    </table>
                </div></div></div></div>
    </form>
    
    </body>

</html>

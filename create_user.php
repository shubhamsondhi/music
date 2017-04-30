<?php
include'head.php'
    ?>
<?php
    $found="";
    $err="";
$success="";
include'dbconfig.php';
 if(isset($_POST['submit']))
    {
     extract($_FILES['image']);
     $address="image/".$name;
     extract($_POST);
     
     $rs=mysqli_query($conn,"SELECT * FROM `usertable` WHERE user_email='$email'") ;
    if(mysqli_num_rows($rs)<1)
	{
         $sql1="INSERT INTO `usertable` (`user_name`, `user_id`, `user_email`, `user_password`, `mob`, `address`, `image`) VALUES ('$name1', NULL, '$email', '$pass', '$mob', '$addr', '$address');";
        if(mysqli_query ($conn,$sql1))
     {
         move_uploaded_file($tmp_name,$address);
     $success="<div class='alert alert-sucess'>Sucessfully Inserted</div>";
     }
       
 }	else
	{
        $found="N";
    }
 }
 if($found=="N"){
     
     $err="<div class='alert alert-warning'>Email Already Exist</div>";
 
 }
    ?>
    <div class="container">
        <div class="col-md-6 form " >
        <form method="post" enctype="multipart/form-data">
    <table class="table"> 
        <tr>
            <td><label for="email" style=" font-size:14px;">Name</label><label for="email" style=" font-size:17px;"></td>
            <td><input type="text" id="name" name="name1"  class="form-control" required></td>      </tr>
        <tr>
            <td><label for="email" style=" font-size:14px;">Email</label></td>
            <td><input type="email" id="email" name="email" class="form-control" required><?php echo $err ?></td>
        </tr>
        <tr>
            <td><label for="email" style=" <font-size:14></font-size:14>px;">Password </label></td>
            <td><input type="password" id="pass" name="pass" class="form-control" required></td>
        </tr>
         <tr>
             <td><label for="email" style=" <font-size:14></font-size:14>px;">Mobile Number</label></td>
             <td><input type="number" id="mob" name="mob"  class="form-control" required></td>
        </tr>
         <tr>
             <td><label for="email" style=" <font-size:14></font-size:14>px;">Address</label></td>
             <td><textarea type="text" id="addr" name="addr"  class="form-control" required></textarea></td>
        </tr>
         <tr>
             <td><label for="email" style=" <font-size:14></font-size:14>px;">Image</label></td>
            <td><input type="file" id="image" name="image"  class="form-control" required>
        </tr>
            <td> <?php echo $success ?> </td>
            <td><input type="submit" class="btn btn-info" name="submit" value="submit">
 </table>
             </form>
              <?php include "footer.php";
            ?>
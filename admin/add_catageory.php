<?php 
include'head.php';
include 'check.php';
if(isset($_POST["submit"]))
{
include 'dbconfig.php';

    extract($_POST);     

        
    $sql1="INSERT INTO `catageory` (`cata_id`, `cata_name`)VALUES(0,'$cata_name')";
    if(mysqli_query($conn,$sql1))
    {
        
        echo "inserted";
        
    }}?><?php
    
    ?> 
        <br><br><br><div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="row carousel-holder">
        
        <form method="post" enctype="multipart/form-data">
<table class="table">
    
        <td>Catageory</td>
    <td><input type="text" id="cata_name" name="cata_name">
    <tr> <td> </td>
            <td><input type="submit" value="submit" name="submit" class="form-control">
        </td></tr>
        </table>
        </form>
                </div></div></div></div>
    </body>
</html>
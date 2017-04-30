<?php
     include "head.php";
include 'check.php';
     include "dbconfig.php";
     if(isset($_POST['submit']))
     {
extract($_POST);
         extract($_FILES['image']);
         $address="image/".$name;
         
     $sql="INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_quantity`, `product_brand`, `cata_id`, `image_upload`) VALUES (NULL, '$name1', '333', '0', 'no', '$cata', '$address')";
     if(mysqli_query ($conn,$sql))
     {
         move_uploaded_file($tmp_name,"../".$address);
     echo"connect";
     }
     }
     ?>
<center><form method="POST" enctype="multipart/form-data"><table class="table" border="1px">
    <tr>
    <td>Music Name</td>
    <td><input type="text" id="name" name="name1" class="form-control" placeholder="" required ></td>
    </tr>
    
    <tr>
    <td>Image</td>
        <td><input type="file" id="image" name="image" class="form-control" placeholder="" required ></td>
    </tr>
    
    <tr>
<td>Music_catageory</td>
        <td>
            <select class="form-control" name="cata"><option>select</option>
                <?php 
                $sql1="SELECT * FROM `catageory`";
                $result=mysqli_query($conn,$sql1);
                while($row=mysqli_fetch_row($result)){
                    echo"<option value='$row[0]'>$row[1]</option>";
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
    <td> </td>
    <td><input type="submit" name="submit" value="Save" class="btn btn-info" ></td>
    
    
    
    </tr>
    </table>
    </form>
    </center>

</body>
</html>
                
                
                
                
                
        
        
        
        
        
        
        
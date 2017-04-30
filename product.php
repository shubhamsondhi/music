
    <?php
if(isset($_POST["submit"]))
{
include'dbconfig.php';
    

    extract($_POST);
    
$sql1="INSERT INTO `product` (`product_ id`, `product_name`, `product_price`, `product_quantity`, `product_brand`, `cata_id`, `image_upload`) VALUES (NULL, '$p_name', '$p_price', '$p_quantity', '$p_brand', '2', '')";
       if(mysqli_query($conn,$sql1))
             {
                 echo"inserted";
             }
       
       
       }
    ?>
<html>
<head>
    <title>google</title>
    
    </head>
<body>
    <?php
include'head.php'
    ?>
   <form method="post" enctype="multipart/form-data"><table>
     <tr>
            <td>product_name</td>
<td><input type="text" id="product_name" name="p_name">
        </tr>
    <tr>
        <td>product_price</td>
        <td><input type="text" id="product_price" name="p_price">
            </tr>
        <tr>
        <td>product_quantity</td>
        <td><input type="text" id="product_quantity" name="p_quantity">
        
        </tr> <tr>
        <td>image_upload</td>
            <td><input type="file"id="image_upload"name="image_upload">
        
        </tr>
        <td> </td>
            <td><input type="submit" name="submit" value="submit">
			
</table>
    </form>
    
    
    
    
    
    
    
    
    
    </body>
</html>

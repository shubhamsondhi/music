  <?php
if(isset($_POST["submit"]))
{
include'dbconfig.php';
  

    extract($_POST);
    
$sql1="INSERT INTO `catageory` (`cata_id`, `cata_name`) VALUES (NULL, '$catageory')";
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
            <td>catageory</td>
<td><input type="text" id="catageory" name="catageory">
        </tr>
    
         <tr>
        <td>image_upload</td>
            <td><input type="file"id="image_upload"name="image_upload">
        
        </tr>
        <td> </td>
            <td><input type="submit" name="submit" value="submit">
			
</table>
    </form>
    
    
    
    
    
    
    
    
    
    </body>
</html>

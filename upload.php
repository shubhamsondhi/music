<html>
<head>
<title>google</title>  
    </head>
    <body><?php
        include'dbconfig.php';
        $sql1="INSERT INTO `upload` (`upload_file`) VALUES ('')";
        mysqli_query($conn,$sql1);
        ?>
    <table>
        <tr>
        <td>upload_file</td>
    <td><input type="text"  id="upload_file" name="upload_file"> 
            </tr><td> </td>
            <td><input type="submit" value="submit">
			
            </table>
        </body>
    
    
</html>
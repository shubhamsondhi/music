<html>
<head>
    <title>google</title>
    
    </head>
    <body><?php
include'dbconfig.php';
   $sql1=INSERT INTO `order_table` (`order_id`, `product_id`, `quantity`, `price`, `received_date`) VALUES (0, '', '', '', '')
    <table class="table">
        <tr>
        <td>order_id</td>
        <td><input type="text" id="order_id" name="order_id" class="form-control" required>
            
        </tr>
        <tr>
        <td>product_id</td>
        <td><input type="text" id="product_id" name="product_id" class="form-control" required>
            </tr>
        <tr>
        <td>quantity</td>
        <td><input type="text" id="quantity" name="quantity" class="form-control" required>
            </tr>
        <tr>
        <td>price</td>
        <td><input type="text" id="price" name="price" class="form-control" required>
              </tr>
        <tr>
        <td>received_date</td>
            <td><input type="text" id="received_date" class="form-control" required>
        </tr>
        </table>
    
    
    
    </body>
</html>
<?php
include 'head.php';
include 'dbconfig.php';
?>

<?php 
               
                    if(isset($_REQUEST['id'])){
                        $id=$_REQUEST['id'];
                $sql="SELECT * FROM `product` where product_id='$id'";
                    }else{
                        
                        header("location:index.php");
                    }
                $result=mysqli_query($conn,$sql);
if( mysqli_num_rows($result)<1 ){
    header("location:index.php");
}
                while($row=mysqli_fetch_row($result)){

?>
              
  <div class="container">
        <div class="row">
            <div class="span5 col-md-4">
                <img src="img/name13.jpg" height="100%"  width="100%"class="img-polaroid" alt="<?php echo $row[1];?>">
            </div>
            <div class="span7 col-md-8">
                <h2><?php echo $row[1];?></h2>
                <h4 class="muted">Best Quality Music</h4>
                <p>We are introducing high quality Music which we believe is best. We can download at very low price and within no time.</p>
                <hr>
                <h3>Price - <del class="text-error"><?php echo $row[2]+500;?></del> <?php echo $row[2];?></h3>
                <p class="muted">.</p>
                <br>
                <p><a href="<?php echo $row[6];?>" download target="_blank" class="btn btn-success btn-large" >Download</a></p><p><audio type="video" src="<?php echo $row[6];?>" controls >music</audio></p>
            </div>
        </div>
        <div class="row product-info">
            <div class="span12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Specification</a></li>
                    <li><a data-toggle="tab" href="#tab-2">Key Features</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade in active">
                        <table class="table table-striped">
                            <tbody>
                               
                                <tr>
                                    <th>Quality</th>
                                    <td>Best(360kbs)</td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div><?php }?>
   <?php include 'footer.php'; ?>
               
 
<?php
  
include 'head.php';

include 'dbconfig.php';
?>
<!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Music Name</p>
                <div class="list-group">
                     <a href="index.php" class="list-group-item">All Music</a>
                   
                
                        <?php 
              
                   
                $sql="SELECT * FROM `Catageory`";
                   
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
     
		
         ?>
               
     
                    <a href="index.php?cata_id=<?php echo "$row[0]";?>" class="list-group-item"><?php echo "$row[1]"; ?> </a>
                    
                
                <?php
                    
                    
                } ?>
                   
                
                
                
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">
     <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/name1.jpg" alt="">
                                </div>
                                   <?php
    for($i=0;$i<5;$i++){
                        
        ?>
                                <div class="item">
                                    <img class="slide-image" src="img/name<?php echo "$i"?>.jpg" alt="">
                                </div>
                                <?php
    } ?>
                               
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
 <?php 
               
                    if(isset($_REQUEST['cata_id'])){
                        $id=$_REQUEST['cata_id'];
                $sql="SELECT * FROM `product` where cata_id='$id'";
                    }else{
                        
                        $sql="SELECT * FROM `product` ";
                    }
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
     
		
         ?>
               
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/name13.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rs. <?php echo"$row[2]"; ?></h4>
                                <h4><a href="order.php?id=<?php echo"$row[0]"; ?>"> <?php echo"$row[1]"; ?></a>
                                </h4>
                                </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                   
                    <?php
                }
                    ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

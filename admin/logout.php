


<?php 

if(isset($_POST['logout'])){
    
    unset($_SESSION["admin"]);
    header("location:login.php");
    
}
if(isset($_SESSION["admin"]))
{ 

?>
<form method="post">
    <input type="submit" value="Log out" name="logout" class="text">

</form>
<?php
} 

else {
    
    
    echo "<a class='page-scroll' href='login.php' class='btn btn-success'>Login</a>";
    
}
?>
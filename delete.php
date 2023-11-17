<?php 
include'connexion.php';
if(isset($_GET ['deleteid'])){
 $iD=$_GET['deleteid'];
 $sqll= "delete from `member` where id=$iD";
 $resultt=mysqli_query($conn,$sqll);
 if($resultt){
    header('location:index.php');
 }else{
    die(mysqli_error($con));
 }
}

?>
<?php
include ('mysql_connect.php');
if (isset($_POST ['submitBtn'])){
    $name= $_Post('Name');
    $price=$_Post('Price');
   if(!$_POST['Name'] || !$_POST['Price']){
       die('Name and Price are required');
   }
   else{
       $conn = db_connect();
       $sql = "insert into menu(name, price) values('".$_POST['name']."','".$_POST['price'].")";
       $conn->query($sql);
   } 
       
}
?>
 
<?php 
    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname="project";


    $conn= mysqli_connect($host,$dbuser,$password,$dbname,);




$name=$_REQUEST["name"];
$category=$_REQUEST["category"];
$quantity=$_REQUEST["quantity"];
$supplier_name=$_REQUEST["supplier_name"];
$buying_price=$_REQUEST["buying_price"];
$selling_price=$_REQUEST["selling_price"];

$insertQuery= "INSERT INTO product(productname,category,quantity,supplier_name,buying_price,selling_price) VALUES('$name','$category','$quantity','$supplier_name','$buying_price','$selling_price')";
$runQuery = mysqli_query($conn,$insertQuery);

include 'formproduct.html';

?>
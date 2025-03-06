<?php 
    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname="project";


    $conn= mysqli_connect($host,$dbuser,$password,$dbname,);




$productname=$_REQUEST["productname"];
$quantity=$_REQUEST["quantity"];
$name=$_REQUEST["name"];
$address=$_REQUEST["address"];
$number=$_REQUEST["number"];
$date=$_REQUEST["date"];

$insertQuery= "INSERT INTO orders(productname,quantity,name,address,number,order_date) VALUES('$productname','$quantity','$name','$address','$number','$date')";
$runQuery = mysqli_query($conn,$insertQuery);

include 'formorder.html';

?>
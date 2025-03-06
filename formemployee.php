
<?php 
    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname="project";


    $conn= mysqli_connect($host,$dbuser,$password,$dbname,);




$name=$_REQUEST["name"];
$phone=$_REQUEST["phone"];
$email=$_REQUEST["email"];
$address=$_REQUEST["address"];
$job=$_REQUEST["job"];
$salary=$_REQUEST["salary"];
$join_date=$_REQUEST["join_date"];

$insertQuery="INSERT INTO employee(name,phone,email,address,job,salary,join_date) VALUES('$name','$phone','$email','$address','$job','$salary','$join_date')";
$runQuery = mysqli_query($conn,$insertQuery);

include 'formemployee.html';

?>
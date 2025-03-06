
<?php 
    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname="project";


    $conn= mysqli_connect($host,$dbuser,$password,$dbname);




$name=$_REQUEST["name"];
$contact = $_REQUEST["contact"];


$insertQuery= "INSERT INTO customerinfo(name,contact) VALUES('$name','$contact')";
$runQuery = mysqli_query($conn,$insertQuery);

include 'index.html';

?>
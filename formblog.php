<?php 
    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname="project";


    $conn= mysqli_connect($host,$dbuser,$password,$dbname,);




$title=$_REQUEST["title"];
$texts=$_REQUEST["texts"];


$insertQuery= "INSERT INTO blog(title,texts) VALUES('$title','$texts')";
$runQuery = mysqli_query($conn,$insertQuery);

include 'formblog.html';

?>
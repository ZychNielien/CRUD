<?php
$con = new mysqli("localhost", "root", "", "sample");

if(!$con){
    die(mysqli_error($con));
}

?>
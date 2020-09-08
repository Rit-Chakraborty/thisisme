<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host="localhost";
$username="root";
$passwd="";
$dbname="project";
$con= mysqli_connect($host, $username, $passwd, $dbname) or die("Connection not Established");
global $con;
?>
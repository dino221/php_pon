<?php

include ('include/dbconnection.php');
session_start();
error_reporting(0);
include ('includes/dbconnection.php');
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $services = $_POST['services'];
        $adate = $_POST['adate'];
        $atime = $_POST['atime'];
        $phone = $_POST['phone'];
        $aptnumber = mt_rand(100000000, 999999999);
    }

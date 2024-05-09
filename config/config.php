<?php
$con = new mysqli("localhost", "root", "", "ToDoList");

if($con->connect_error)
{
    die("Connection failed:".$con->connect_error);
}
?>
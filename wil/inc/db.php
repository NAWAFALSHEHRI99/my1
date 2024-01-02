<?php

$conn = mysqli_connect('localhost','root','root','wil');

if(!$conn){
 echo 'Error:  ' . mysqli_connect_errno();
}

<?php
if(!isset($_SESSION)){
    session_start();
}

$conn = mysqli_connect('localhost','root','','codelai');
if(!$conn){
    die('khong the ket noi');
}

?>
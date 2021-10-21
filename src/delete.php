<?php
    include("config/constant.php");
    $reci_id = $_GET['reci_id'];

     $sql ="DELETE FROM `code_lai` WHERE reci_id = $reci_id";
    $res = mysqli_query($conn,$sql);

    if($res){
        $_SESSION['noti']= "Đã xóa";
        header("location:index.php");
    }else{
        $_SESSION['noti'] =" Lỗi!!!!";
        header("location:error.php");
    }



?>
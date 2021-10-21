<?php
    include('config/header.php');
    include('config/constant.php');

    $reci_id = $_GET['reci_id'];
    $sql = "SELECT * FROM code_lai WHERE reci_id = $reci_id";
    $res = mysqli_query($conn,$sql);
    if($res){
        $row = mysqli_fetch_assoc($res);
        $reci_name =$row['reci_name'];
        $reci_age =$row['reci_age'];
        $reci_bgrb =$row['reci_bgrb'];
        $reci_bqnty =$row['reci_bqnty'];
        $reci_sex =$row['reci_sex'];
        $reci_reg_date =$row['reci_reg_date'];
        $reci_phno =$row['reci_phno'];
    }
   
?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label"> Họ và tên</label>
                <input type="text" class="form-control" id="reci_name" name="reci_name" >  
            </div>
            <div class="mb-3">
                <label class="form-label">Tuổi</label>
                <input type="text" class="form-control" id="reci_age" name="reci_age" >  
            </div>
            <div class="mb-3">
                <label class="form-label"> Nhóm máu</label>
                <input type="text" class="form-control" id="reci_bgrb" name="reci_bgrb" >  
            </div>
            <div class="mb-3">
                <label class="form-label"> Số lượng máu cần nhập</label>
                <input type="text" class="form-control" id="reci_bqnty" name="reci_bqnty" >  
            </div>
            <div class="mb-3">
                <label class="form-label">Giới Tính</label>
                <input type="text" class="form-control" id="reci_sex" name="reci_sex" >  
            </div>
            <div class="mb-3">
                <label class="form-label"> Ngày đăng kí nhận máu</label>
                <input type="text" class="form-control" id="reci_reg_date" name="reci_reg_date" >  
            </div>
            <div class="mb-3">
                <label class="form-label"> Số điện thoại</label>
                <input type="text" class="form-control" id="reci_phno" name="reci_phno" >  
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Sửa </button>
        </form>
        </div>
    </div>
</div>


<?php
if(isset($_POST['submit'])){
    $reci_name =$_POST['reci_name'];
    $reci_age =$_POST['reci_age'];
    $reci_bgrb =$_POST['reci_bgrb'];
    $reci_bqnty =$_POST['reci_bqnty'];
    $reci_sex =$_POST['reci_sex'];
    $reci_reg_date =$_POST['reci_reg_date'];
    $reci_phno =$_POST['reci_phno'];
     $sql = "UPDATE `code_lai`
    SET `reci_name` = '$reci_name',
    `reci_age` = '$reci_age',
    `reci_bgrb` = '$reci_bgrb',
    `reci_bqnty` = '$reci_bqnty',
    `reci_sex` = '$reci_sex',
    `reci_reg_date` = '$reci_reg_date',
    `reci_phno` = '$reci_phno'
    WHERE `reci_id` = $reci_id";
    $res = mysqli_query($conn,$sql);
    if($res){
        $_SESSION['noti']= "Đã thêm thành công";
        header("location:index.php");
    }else{
        $_SESSION['noti'] =" Lỗi!!!!";
        header("location:error.php");
    }

}


include('config/footer.php');
?>
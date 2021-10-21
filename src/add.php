<?php
include('config/header.php');
include('config/constant.php');

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
            <button type="submit" class="btn btn-primary" name="submit">Thêm </button>
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
    echo $sql= "INSERT INTO`code_lai`(`reci_name` , `reci_age` , `reci_bgrb` , `reci_bqnty` , `reci_sex` , `reci_reg_date` , `reci_phno`)
    VALUES ('$reci_name ',' $reci_age ',' $reci_bgrb ',' $reci_bqnty ',' $reci_sex ',' $reci_reg_date ',' $reci_phno ')";
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

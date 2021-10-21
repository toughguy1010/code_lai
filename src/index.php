<?php
    include("config/header.php");
    include("config/constant.php");
?>
<div class="container">
    <h1 class="text-center">Danh sach nguoi duoc hien mau</h1>
    <?php
    if(isset($_SESSION['noti'])){
        echo $_SESSION['noti'];
        unset($_SESSION['noti']);
    }
    ?>
    <a href="add.php" class="add">ADD</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Tuổi</th>
        <th scope="col">Nhóm máu</th>
        <th scope="col">Số lượng máu cần nhập</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Ngày đăng kí nhận máu</th>
        <th scope="col">Số điện thoại</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM code_lai";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result )>0){
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
        <th scope="row"><?php echo $i; ?></th>
        <th scope="col"><?php echo $row['reci_name']; ?></th>
        <th scope="col"><?php echo $row['reci_age']; ?></th>
        <th scope="col"><?php echo $row['reci_bgrb']; ?></th>
        <th scope="col"><?php echo $row['reci_bqnty']; ?></th>
        <th scope="col"><?php echo $row['reci_sex']; ?></th>
        <th scope="col"><?php echo $row['reci_reg_date']; ?></th>
        <th scope="col"><?php echo $row['reci_phno']; ?></th>
        <th scope="col"><a href="edit.php?reci_id=<?php echo $row['reci_id'];?>"> Edit</a> </th>
        <th scope="col"><a href="delete.php?reci_id=<?php echo $row['reci_id'];?>"> Delete</a> </th>

        
        </tr>
        <?php


                    $i++;
                }
            }
        ?>
    </tbody>
    </table>
</div>






<?php
    include('config/footer.php')
?>
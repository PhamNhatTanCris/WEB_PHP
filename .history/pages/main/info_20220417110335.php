<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/info.css">
</head>
<body>
<p><?php
            if(isset($_SESSION['dangky'])){
                echo 'Xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
                $id =$_SESSION['dangky'];
                $sql_thongtin ="SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
                $query_thongtin=mysqli_query($connect,$sql_thongtin);
                
                while($row=mysqli_fetch_array($query_thongtin)){         
    ?></p><br>
    <div class="container">
        <div class="info-header">
            <h3>Hồ sơ của bạn</h3>
            <p>Quản lý thông tin cá nhân của bạn</p>
        </div>
        <div class="infor-main">
            <div class="infor-main-text">
                <label for="">Tên đăng nhập: </label>
                <span class="infor-text-sql"><?php echo $row['hovaten']  ?></span>
            </div>
            <div class="infor-main-text">
                <label for="">Email: </label>
                <span class="infor-text-sql"><?php echo $row['email']  ?></span>
            </div>
            <div class="infor-main-text">
                <label for="">Địa chỉ: </label>
                <span class="infor-text-sql"><?php echo $row['diachi']  ?></span>
            </div>
            <div class="infor-main-text">
                <label for="">Số điện thoại: </label>
                <span class="infor-text-sql"><?php echo $row['sodienthoai']  ?></span>
            </div>
        </div>
    </div>
    <?php
            }
    }

    ?>
</body>
</html>
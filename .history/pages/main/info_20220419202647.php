<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/info.css">
</head>
<body>
<p><?php
            if(isset($_SESSION['dangky'])){
                // echo 'Xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
                $id =$_SESSION['dangky'];
                $sql_thongtin ="SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
                $query_thongtin=mysqli_query($connect,$sql_thongtin);
                
                while($row=mysqli_fetch_array($query_thongtin)){         
    ?></p><br>
    <div class="container-info">
        <!-- <div class="sidebar-info">
            <ul class="sidebar-list">
                    <li class="sidebar-list-item">
                        <img class="sidebar-avatar" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Tiffany-and-co-new-global-ambassador-blackpink-rose-4.jpg/800px-Tiffany-and-co-new-global-ambassador-blackpink-rose-4.jpg" alt="">
                        <?php 
                            echo ''.'<span style="color:red">'.$row['taikhoan'].'</span>';
                        ?>
                    </li>
            </ul>
        </div> -->
        <div class="card">
            <div class="icon">
                <i class="far fa-heart heart-icon"></i>
                <i class="fas fa-cart-plus cart-icon"></i>
            </div>
            <div class="product">
                <img
                    src="https://www.nodemy.vn/projects/html-css-js/product-card/Nike%20Zoom%20KD%2012.png"
                    alt=""
                    class="product-img"
                />
                <div class="product-info">
                    <span class="product-name">Nike Zoom KD 12</span>
                    <span class="product-price">$99</span>
                </div>
            </div>
            <div class="hover">
                <div class="product-size">
                    <span class="size">Size: </span>
                    <div class="btn-size-list">
                        <button class="btn-size-item">1</button>
                        <button class="btn-size-item">2</button>
                        <button class="btn-size-item">3</button>
                        <button class="btn-size-item">4</button>
                    </div>
                </div>
                <div class="product-color">
                    <span class="color">Color: </span>
                    <div class="btn-color-list">
                        <button class="btn-color-item color-red"></button>
                        <button class="btn-color-item color-blue"></button>
                        <button class="btn-color-item color-green"></button>
                    </div>
                </div>
                <div class="product-buy-add">
                    <button class="btn-buy">Buy now</button>
                    <button class="btn-addcart">Add cart</button>
                </div>
            </div>
        </div>
        <div class="wrapper-info">
            <div class="info-header">
                <h3>Hồ sơ của bạn</h3>
                <p>Quản lý thông tin cá nhân của bạn</p>
            </div>
            <div class="infor-main">
                <div class="infor-main-text">
                    <label for="">Tên Đăng Nhập: </label>
                    <span class="infor-text-sql"><?php echo $row['hovaten']  ?></span>
                </div>
                <div class="infor-main-text">
                    <label for="">Email: </label>
                    <span class="infor-text-sql"><?php echo $row['email']  ?> <a href="" style="font-size:12px">Thay đổi</a></span>
                </div>
                <div class="infor-main-text">
                    <label for="">Địa Chỉ: </label>
                    <span class="infor-text-sql"><?php echo $row['diachi']  ?></span>
                </div>
                <div class="infor-main-text">
                    <label for="">Số Điện Thoại: </label>
                    <span class="infor-text-sql"><?php echo $row['sodienthoai']  ?> <a href="" style="font-size:12px">Thay đổi</a></span>
                </div>
            </div>
        </div>
    </div>
    <?php
            }
    }

    ?>
</body>
</html>
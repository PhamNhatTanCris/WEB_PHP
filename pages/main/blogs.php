<?php
// GET id là lấy id từ bên MENU.php 
$sql_blog = "SELECT * FROM tbl_blog";
$query_blog = mysqli_query($connect, $sql_blog);
?>
<div class="blog">


    <?php
    while ($row = mysqli_fetch_array($query_blog)) {
    ?>

    <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
        target="_blank">
        <div class="d-flex flex-column">
            <div>

                <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
            </div>
            <div>

                <h3><?php echo $row['tenblog'] ?></h3>
                <p><?php echo $row['noidung'] ?></p>
            </div>
        </div>

    </a>
    <!-- 
        <li>
            <a class="parent-img" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                <p></p>
                <h5 class="title_product"> <?php echo $row['tensanpham'] ?></h5>
                <h5 class="price_product">Giá: <?php echo number_format($row['giasanpham'], 0, ',', '.') . ' VNĐ' ?></h5>
                <p style="text-align: center;"><?php echo "Xem chi tiết" ?></p>
            </a>
        </li> -->
    <?php
    }
    ?>

    <!-- <a href="http://mauweb.monamedia.net/donghohaitrieu/chiec-dong-ho-cua-nhung-ceo-quyen-luc-nhat-the-gioi/"
        target="_blank">
        <div class="d-flex flex-column">
            <div>

                <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-4.jpg" alt="">
            </div>
            <div>

                <h3>Chiếc đồng hồ của những CEO quyền lực nhất thế giới</h3>
                <p>Đối với một số doanh nhân, một chiếc đồng hồ đeo tay không chỉ là ...</p>
            </div>
        </div>

    </a>
    <a href="http://mauweb.monamedia.net/donghohaitrieu/12-chiec-dong-ho-danh-cho-nu-gioi-dat-gia-nhat-moi-thoi-dai/"
        target="_blank">

        <div class="d-flex flex-column">
            <div>

                <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2.jpg" alt="">
            </div>
            <div>

                <h3>12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại</h3>
                <p>Công nghiệp sản xuất đồng hồ sang trọng có dấu hiệu chững lại trong hai ...</p>
            </div>
        </div>
    </a>

    <a href="http://mauweb.monamedia.net/donghohaitrieu/10-thuong-hieu-dong-ho-cao-cap-hang-dau-moi-quy-ong-deu-quan-tam-rolex-xep-hang-so-3/"
        target="_blank">
        <div class="d-flex flex-column">
            <div>

                <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/new-3.jpg" alt="">
            </div>
            <div>
                <h3>10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm, Rolex xếp hạng...</h3>
                <p>1. Audemars Piguet Được thành lập vào năm 1875 bởi Jules-Louis Audemars và Edward-Auguste Piguet, ...
                </p>
            </div>

        </div>

    </a> -->
</div>
<div style="clear:both;"></div>

<div class="show_new">
    <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
    if (isset($_GET['quanly'])) {
        $bientam = $_GET['quanly'];
    } else {
        $bientam = "";
    }
    if ($bientam == "") { ?>

    <div class="xu-huong d-flex flex-row">
        <div class="img img1">
            <div>
                <h6>Xu hướng 2019</h6>
                <h1>ĐỒNG HỒ NAM</h1>
            </div>
            <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-1.jpg" alt="">
        </div>
        <div class="img img2">
            <div>
                <h6>Xu hướng 2019</h6>
                <h1>ĐỒNG HỒ NỮ</h1>
            </div>
            <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/trend-2.jpg
" alt="">
        </div>
    </div>
    <div class="new_product">
        <h3>SẢN PHẨM MỚI</h3>
    </div>
    <?php
        include("main/sanphammoi.php");
        include("main/banchay.php");
    }
    ?>

</div>

<div style="clear:both;"></div>
<div class="show">
    <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
    if (isset($_GET['quanly'])) {
        $bientam = $_GET['quanly'];
    } else {
        $bientam = "";
    }
    if ($bientam == "") {
    ?>
    <div class="new_product">
        <h3>TẤT CẢ SẢN PHẨM</h3>
    </div>
    <?php
        include("main/index.php");
        include("main/blogs.php");
    }

    ?>

</div>
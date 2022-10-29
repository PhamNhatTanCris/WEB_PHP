<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($connect, $sql_danhmuc);
?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<div class="menu">
    <div class="menu_list d-flex flex-row">
        <div>
            <img src="http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/logo-mona-watches-white.png" alt="">
        </div>
        <ul class="menu_list-left d-flex flex-row">
            <li> <a href="index.php">Home</a></li>
            <li> <a href="index.php?quanly=contact">Liên hệ </a></li>
            <!-- <li> <a href="index.php?quanly=giohang">Giỏ hàng</a></li> -->
            <li class="danhmuc"><a class="danhmuc" href="">Danh mục</a>
                <ul class="menu_danhmuc">
                    <?php
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                        <li> <a href="index.php?quanly=danhmuclist&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li><a href="index.php?quanly=intro">Giới thiệu</a></li>
        </ul>
        <div class="menu-search d-flex flex-row">
            <li class="menu-search_li">
                <Form method="POST" action="index.php?quanly=timkiem">
                    <input type="text" class="menu-input-text" placeholder="Tìm kiếm....." name="tukhoa">
                    <button type="submit" name="timkiem" value="Tìm Kiếm" style="background-color: #202124; outline: none ; border: none">
                        <i class="fa-solid fa-magnifying-glass" style="color:#fff;cursor: pointer"></i>
                    </button>
                    <!-- <input type="submit" class="menu-input-submit" name="timkiem" value="Tìm Kiếm"> -->
                </Form>
            </li>
            <li class="icon d-flex">
                <i class="fa-solid fa-user"></i>
                <a href="index.php?quanly=giohang"> <i class="fa-solid fa-cart-shopping"></i></a>
            </li>

        </div>
        <ul class="menu_list-right account">
            <?php
            if (isset($_SESSION['dangky'])) {
            ?>

                <li><a href="index.php?quanly=thongtin"> Thông tin</a></li>
                <li> <a href="index.php?dangxuat=1">Đăng xuất</a></li>
            <?php
            } else {
            ?>
                <li> <a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                <li> <a href="index.php?quanly=dangky">Đăng ký</a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
<script>
    const account = document.querySelector(".fa-user")
    const use = document.querySelector(".menu_list-right")

    console.log(account)
    account.addEventListener("click", () => {
        use.classList.toggle("account")
    })
</script>
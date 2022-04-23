 <p>Chi tiết sản phẩm </p>
 <?php
    $sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet=mysqli_query($connect,$sql_chitiet);
    while ($row_chitiet=mysqli_fetch_array($query_chitiet)){
 ?>
 <div class="warpper_deital"> 
 <div class="hinhanh_sanpham">
        <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
 </div>
    <form class="form-sp" action="pages/main/giohang/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
        <div class="chitiet_sanpham">
            <h3 style="margin: 0;"><?php echo $row_chitiet['tensanpham'] ?></h3>
            <div class="rating">
                     <span class="review-no">4.8</span>
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<!-- <span class="review-no">4.8</span> -->
						</div>
            <div class="price">
                  <?php $salerandom=rand(10,70) ?>         
                  <p class="gia-cu"><?php echo $row_chitiet['giasanpham']*($salerandom/100)+ $row_chitiet['giasanpham']?></p>
                  <h5 class="gia-now"><?php echo number_format($row_chitiet['giasanpham'],0,',','.') ?> VNĐ</h5>
                  <span class="slae"><?php echo  $salerandom ?>% GIẢM</span>
            </div>
            <div class="soluong-sp">
                  <p class="soluong-sp-p">Số lượng:</p>
                  <div class="soluong-sp-dem">
                     <a class="soluong-sp-dem-icon" href="pages/main/giohang/suasoluong.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
                     <input class="soluong-sp-input" type="text" name="soluong" value="1">
                     <a class="soluong-sp-dem-icon" href="pages/main/giohang/suasoluong.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
                  </div>
                  <p class="soluong-sp-cosan"><?php echo $row_chitiet['soluong'] ?> sản phẩm có sẵn</p>
            </div>
            <p>Danh mục :<?php echo $row_chitiet['tendanhmuc'] ?></p>
            <p><input class="themgiohang" type="submit" name="themgiohang" value="Thêm Giỏ Hàng"></p>
        </div>
    </form>
 </div>
 <?php
    }
 ?>
 <script type="text/javascript">
      var soluong = document.getElementsByClassName('soluong-sp-input');
      var demPlus = document.querySelector('.soluong-sp-dem-icon .fa-plus');
      var demMins = document.querySelector('.soluong-sp-dem-icon .fa-mins');
      demplus.addEventListener('click',function(){
          soluong.value++;
      })
      demMins.addEventListener('click',function(){
          soluong.value--;
      })

 </script>
 <!-- Tesst -->
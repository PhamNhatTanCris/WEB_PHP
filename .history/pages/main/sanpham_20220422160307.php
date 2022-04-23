<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->

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
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
							<!-- <span class="review-no">4.8</span> -->
						</div>
            <div class="price">
                  <?php $salerandom=rand(10,70) ?>         
                  <p class="gia-cu"><?php echo number_format($row_chitiet['giasanpham']*($salerandom/100)+ $row_chitiet['giasanpham'],0,',','.')?> VNĐ</p>
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
                  <p class="soluong-sp-cosan"><?php echo $row_chitiet['soluong'] ?></p><span class="soluong-sp-cosan-text">sản phẩm còn sẵn</span>
            </div>
            <p class="danhmuc">Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
            <div class="mota">
                  <p class="mota-p">Mô tả:</p>
                  <p class="mota-text">Em rất thích ngắm nhìn những cơn mưa mùa xuân. 
                     Mưa xuân không vội vã, ồn ào như mưa hạ. Mưa xuân dịu dàng, chầm chậm, mang đến cảm giác bình yên và thư thái trong tâm hồn. 
                     Những hạt mưa bắt đầu rơi, hạt mưa nhỏ, lất phất trong gió, vương những giọt long lanh trên cánh đào mỏng manh, trên những chồi non cây lá.
                     Mưa phảng phất trong không gian ấm áp của mùa xuân, nhè nhẹ, nhè nhẹ. 
                     Mưa dần buông những hạt cuối cùng, vạn vật được mưa tắm mắt trở nên căng tràn sức sống. Cánh mai vàng nhờ thưởng thức hạt ngọc tinh túy của bầu trời mà tươi tắn hơn. 
                     Chồi non mơn mởn, xanh biếc. Nương lúa, bãi ngô của người nông dân cũng mướt xanh. Mưa xuân diệu kỳ còn mang đến cho lòng người niềm vui khoan khoái, yêu biết bao nhiêu những cơn mưa xuân tuyệt vời như thế.
   </p>
            </div>
            <div class="input-themcart">
               <i class="fa-solid fa-cart-plus"></i>
               <input class="themgiohang" type="submit" name="themgiohang" value="Thêm Giỏ Hàng">
            </div>
        </div>
    </form>
 </div>
 <?php
    }
 ?>
 <script type="text/javascript">
      var soluong = document.querySelector('.soluong-sp-input');
      var demPlus = document.querySelector('.soluong-sp-dem-icon .fa-plus');
      var demMins = document.querySelector('.soluong-sp-dem-icon .fa-minus');
      var soluongMax = document.querySelector('.soluong-sp-cosan').innerHTML;
      console.log(soluongMax);
      
      demPlus.addEventListener('click',function(){
         // console.log("hi");
         // soluong.value++;
         if(soluong.value>=soluongMax){
            soluong.value=soluongMax;
         } else {
            soluong.value++;
         }
      })
      demMins.addEventListener('click',function(){
          if(soluong.value<=1){
            soluong.value=1;
          } else {
            soluong.value--;
          }
      })

 </script>
 <!-- Tesst -->
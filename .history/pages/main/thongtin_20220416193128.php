 <style>
     .thongtin{
         width: 100%;
         height: 100%;
         /* border: 1px solid black; */
         text-align: center;
         border-radius: 15px;
     }
 </style>
 
 <p>Thông tin cá nhân </p>
<div class="thongtin">
    <p><?php
            if(isset($_SESSION['dangky'])){
                echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
                $id =$_SESSION['dangky'];
                $sql_thongtin ="SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
                $query_thongtin=mysqli_query($connect,$sql_thongtin);
                
                while($row=mysqli_fetch_array($query_thongtin)){
                
            
    ?></p><br>
        

        <p class="thongtin-p">Họ và tên : <?php echo $row['hovaten']  ?></p>
        <p class="thongtin-p">Email : <?php echo $row['email']  ?></p>
        <p class="thongtin-p">Địa chỉ : <?php echo $row['diachi']  ?></p>
        <p class="thongtin-p">Số điện thoại : <?php echo $row['sodienthoai']  ?></p>
        


    <?php
            }
    }

    ?>
</div>
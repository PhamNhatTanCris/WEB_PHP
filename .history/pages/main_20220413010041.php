


<div class="main">
            <?php
                #include ("sidebar/sidebar.php");
            ?>
            <div class="maincontent">
              
                <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
                        if(isset($_GET['quanly'])){
                            $bientam=$_GET['quanly'];

                        }else{
                            $bientam="";
                        }
                        if ($bientam=='danhmuclist'){
                            include("main/danhmuc.php");
                        }elseif ($bientam=='giohang'){ 
                            include("main/giohang/cart.php");
                        }elseif ($bientam=='dangky'){ 
                            include("main/dangky.php");
                        }elseif ($bientam=='contact'){ 
                            include("main/contact.php");
                        }elseif ($bientam=='sanpham'){ 
                            include("main/sanpham.php");
                        
                        }elseif ($bientam=='dangnhap'){ 
                            include("main/dangnhap.php");
                        }elseif ($bientam=='thongtin'){ 
                            include("main/thongtin.php");

                        }elseif ($bientam=='timkiem'){ 
                            include("main/timkiem.php");
                            
                        
                        }else{ ?>






                <!-- <div class="silder">
                        <div class="sildes">
                            <input type="radio" name="radio_btn" id="radio1">
                            <input type="radio" name="radio_btn" id="radio2">
                            <input type="radio" name="radio_btn" id="radio3">
                            <div class="silde first">
                                <img src="images/1a.jpg" alt="">
                            </div>
                            <div class="silde">
                                <img src="images/2a.jpg" alt="">
                            </div>
                            <div class="silde">
                                <img src="images/4a.jpg" alt="">
                            </div>

                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>

                            </div>

                        
                        </div>
                        <div class="navigation-manual">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                        </div>

                </div> -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="https://www.w3schools.com/howto/img_lights_wide.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
<br>
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        </div>
                
                        <?php
                       
                        }
 ?>
                
            </div>
        </div>




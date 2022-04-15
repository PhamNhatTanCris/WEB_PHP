<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./sign_in.css" />
        <title>FORM</title>
    </head>
    <body>
        <div class="main">
            <form action="" method="POST" class="form" id="form-1">
                <h3 class="heading">Thành viên đăng ký</h3>
                <p class="desc">Cùng nhau mua đồng hồ tại WATCH LUXURY ❤️</p>

                <div class="spacer"></div>

                <div class="form-group">
                    <label for="fullname" class="form-label">Tên đầy đủ</label>
                    <input id="fullname" name="hovaten" type="text" placeholder="VD: Sơn Đặng" class="form-control" />
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="fullname" class="form-label">Tên tài khoản</label>
                    <input id="fullname" name="taikhoan" type="text" placeholder="VD: Sơn Đặng" class="form-control" />
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="VD: email@domain.com"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input
                        id="password"
                        name="matkhau"
                        type="password"
                        placeholder="Nhập mật khẩu"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                    <input
                        id="password_confirmation"
                        name="rematkhau"
                        placeholder="Nhập lại mật khẩu"
                        type="password"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>                      
                <div class="form-group">
                    <label for="fullname" class="form-label">Số điện thoại</label>
                    <input id="fullname" name="dienthoai" type="text" placeholder="Số điện thoại" class="form-control" />
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="fullname" class="form-label">Địa chỉ</label>
                    <input id="fullname" name="diachi" type="text" placeholder="Địa chỉ" class="form-control" />
                <span class="form-message"></span>
                <button class="form-submit" name="dangky" >Đăng ký</button>
                <a href="../index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a>
            </form>
            <div>
                <?php
                    session_start();
                    include('../admincp/config/connect.php');   
                    if(isset($_POST['dangky'])) {
                        $tenkhachhang = $_POST['hovaten'];
                        $taikhoan= $_POST['taikhoan'];
                        $matkhau = md5($_POST['matkhau']);
                        $rematkhau=  md5($_POST['rematkhau']);
                        $email = $_POST['email'];
                        $dienthoai = $_POST['dienthoai'];
                        $diachi = $_POST['diachi'];
                        if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi)
                        {
                            echo "Vui lòng nhập đầy đủ thông tin.";
                            
                            
                        }elseif($matkhau!=$rematkhau){
                            echo "mat khau chua trung"; 

                        }
                        else{
                    
                            
                            $sql_dangky = "INSERT INTO tbl_dangky(hovaten,taikhoan,matkhau,sodienthoai,email,diachi) VALUE('".$tenkhachhang."','".$taikhoan."','".$matkhau."','".$dienthoai."','".$email."','".$diachi."')";
                            $query_dangky=mysqli_query($connect,$sql_dangky);
                            if($query_dangky){
                                echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
                                $_SESSION['dangky'] = $taikhoan;
                                $_SESSION['email'] = $email;
                                $_SESSION['id_khachhang'] = mysqli_insert_id($connect);
                                
                                }
                            }
                    }
                
                ?>
            </div>
        </div>
        <script src="./sign_in.js"></script>
        <script>
            // Mong muốn của chúngta
            Validator({
                form: "#form-1",
                formGroupSelector: ".form-group",
                error: ".form-message",
                rules: [
                    Validator.isRequired("#fullname"),
                    Validator.isEmail("#email"),
                    Validator.minLength("#password", 6),
                    Validator.isRequired("#password_confirmation"),
                    // Validator.isRequired("#avatar"),
                    // Validator.isRequired("#province"),
                    // Validator.isRequired('input[name="gender"]'),
                    Validator.confirmPassword(
                        "#password_confirmation",
                        function () {
                            return document.querySelector("#form-1 #password").value;
                        },
                        "Mật khẩu nhập lại không chính xác"
                    ),
                ],
                onSubmit: function (data) {
                    console.log(data);
                },
            });
        </script>
    </body>
</html>

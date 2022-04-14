<?php
	
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['taikhoan'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky ,tbl_admin WHERE tbl_dangky.taikhoan='".$taikhoan."' AND tbl_dangky.matkhau='".$matkhau."'  LIMIT 1";
		$row = mysqli_query($connect,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['taikhoan'];
			$_SESSION['email'] = $row_data['email'];
            $_SESSION['id_khachhang']= $row_data['id_khachhang'];
			header("Location:index.php");
		}elseif($taikhoan=='admin'){
            header("Location:admincp/login.php");
        }else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
        }
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
    <style>
        .warpper {
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            height: calc(100vh - 230px - 34px);
            background-color: #f5f5f5;
        }
        .warpper h1 {
            text-align: center;
            margin-bottom: 48px;
        }
        .warpper input {
            display: block;margin: 0 auto;
            justify-content: center;
            margin-top: 24px;
        }
        .taikhoan {
            margin-bottom: 24px;
        }
        .taikhoan, .matkhau {
            display:flex;
            justify-content:center;
            align-items: center;
        }
        .taikhoan label, .matkhau label {
            margin-bottom: 0;
        }
        .taikhoan input, .matkhau input {
            margin-top: 0;
            margin-left: 24px;
        }

    </style>
</head>
<body>
   
    <div class="warpper">
        <form action="" method="POST">
            <h1>Đăng nhập</h1>
        <div class="taikhoan">
            <label for=""> Tài Khoản</label><br>
            <input type="text" name="taikhoan">
        </div>

        <div class="matkhau">
            <label for=""> Mật khẩu</label><br>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="dangnhap" value="Đăng Nhập">
        </div>
        </form>
    </div>
    
</div>

    
</body>
</html>
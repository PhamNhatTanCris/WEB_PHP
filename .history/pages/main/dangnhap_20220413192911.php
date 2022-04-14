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
        @import "bourbon";

// Colors
$greenSeaweed: rgba(2, 128, 144, 1);
$blueQueen: rgba(69, 105, 144, 1);
$redFire: rgba(244, 91, 105, 1);

// Fonts
$fontAsap: 'Asap', sans-serif;

body {
  background-color: $redFire;
  font-family: $fontAsap;
}

.login {
  overflow: hidden;
  background-color: white;
  padding: 40px 30px 30px 30px;
  border-radius: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  @include transform(translate(-50%, -50%));
  @include transition(transform 300ms, box-shadow 300ms);
  box-shadow: 5px 10px 10px rgba($greenSeaweed, 0.2);
  
  &::before, &::after {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    border-top-left-radius: 40%;
    border-top-right-radius: 45%;
    border-bottom-left-radius: 35%;
    border-bottom-right-radius: 40%;
    z-index: -1;
  }
  
  &::before {
    left: 40%;
    bottom: -130%;
    background-color: rgba($blueQueen, 0.15);
    @include animation(wawes 6s infinite linear);
  }
  
  &::after {
    left: 35%;
    bottom: -125%;
    background-color: rgba($greenSeaweed, 0.2);
    @include animation(wawes 7s infinite);
  }
  
  > input {
    font-family: $fontAsap;
    display: block;
    border-radius: 5px;
    font-size: 16px;
    background: white;
    width: 100%;
    border: 0;
    padding: 10px 10px;
    margin: 15px -10px;
  }
  
  > button {
    font-family: $fontAsap;
    cursor: pointer;
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    width: 80px;
    border: 0;
    padding: 10px 0;
    margin-top: 10px;
    margin-left: -5px;
    border-radius: 5px;
    background-color: $redFire;
    @include transition(background-color 300ms);
    
    &:hover {
      background-color: darken($redFire, 5%);
    }
  }
}

@include keyframes (wawes) {
  from { @include transform(rotate(0)); }
  to { @include transform(rotate(360deg)); }
}

a {
  text-decoration: none;
  color: rgba(white, 0.6);
  position: absolute;
  right: 10px;
  bottom: 10px;
  font-size: 12px;
}
    </style>
</head>
<body>
   
    <!-- <div class="warpper">
    <form action="" method="POST">
        <h1>LOGIN</h1>
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
    </div> -->
    <form class="login">
  <input type="text" placeholder="Username" name="taikhoan">
  <input type="password" placeholder="Password" name="password">
  <button name="dangnhap">Login</button>
</form>

</div>

    
</body>
</html>
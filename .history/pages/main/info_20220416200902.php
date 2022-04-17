<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="info-header">
            <h3>Hồ sơ của bạn</h3>
            <p>Quản lý thông tin cá nhân của bạn</p>
        </div>
        <div class="infor-main">
            <label for="">Tên đăng nhập: </label>
            <span class="infor-text-sql"><?php echo $row['hovaten']  ?></span>
        </div>
    </div>
</body>
</html>
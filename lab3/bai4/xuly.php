<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thông tin đăng nhập</title>
    <style>
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: left;
            /* text-anchor: middle; */
            color: #ff2f00;
            font-size: medium;
        }
    </style>
</head>
<body>
    
    <table>
        <h3><b>Bạn đã đăng nhập thành công và dưới đây là kết quả đăng nhập:</b></h3>
        <tr>
            <td>Họ và tên:</td>
            <td><?php echo $_POST["txtFullname"]; ?></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td><?php echo $_POST["txtAdd"]; ?></td>
        </tr>
        <tr>
            <td>Số ĐT:</td>
            <td><?php echo $_POST["txtPhone"]; ?></td>
        </tr>
        <tr>
            <td>Giới tính:</td>
            <td><?php echo $_POST["txtGT"]; ?></td>
        </tr>
        <tr>
            <td>Quốc tịch:</td>
            <td><?php echo $_POST["txtQT"]; ?></td>
        </tr>
        <tr>
            <td>Các môn đã học:</td>
            <td><?php
                    if(isset($_POST['MH1'])) echo $_POST['MH1'] . "\n\n";
                    if(isset($_POST['MH2'])) echo $_POST['MH2'] . "\n\n";
                    if(isset($_POST['MH3'])) echo $_POST['MH3'] . "\n\n";
                    if(isset($_POST['MH4'])) echo $_POST['MH4'];
                        
                ?>
            </td>
        </tr>
        <tr>
            <td>Ghi chú:</td>
            <td><?php echo $_POST["comment"]; ?></td>
        </tr>
    </table>
    <a href="javascript:window.history.back(-1);">Quay lại trang trước</a>


</body>
</html>

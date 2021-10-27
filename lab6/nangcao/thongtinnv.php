<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Thong tin nhân viên</title>
	<style type="text/css">
		img {
			width: 50px;
			height: 50px;
			border-radius: 50%;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
		}
	</style>
</head>

<body>
	<?php
	include('header.html');
	// Ket noi CSDL
	require("connect.php");

	$rowsPerPage = 2; //số mẩu tin trên mỗi trang, giả sử là 10
	if (!isset($_GET['page'])) {
		$_GET['page'] = 1;
	}
	//vị trí của mẩu tin đầu tiên trên mỗi trang
	$offset = ($_GET['page'] - 1) * $rowsPerPage;
	//lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
	$strSQL = "SELECT * FROM nhanvien LIMIT $offset, $rowsPerPage";
	// $result = mysqli_query($conn, ‘SELECT Ma_sua, ten_sua, Trong_luong,
	// Don_gia FROM sua LIMIT '. $offset . ', ‘ .$rowsPerPage);
	// Chuan bi cau truy van & Thuc thi cau truy van
	//$strSQL = "SELECT * FROM nhanvien";
	$result = mysqli_query($dbc, $strSQL);
	// Chuan bi cau truy van & Thuc thi cau truy van
	// $strSQL = "SELECT * FROM nhanvien";
	// $result = mysqli_query($dbc,$strSQL);
	// Xu ly du lieu tra ve
	if (mysqli_num_rows($result) == 0) {
		echo "Chưa có dữ liệu";
	} else {
		echo "<h1 style='color: blue;' align='center'>THÔNG TIN NHÂN VIÊN</h1>
		  <table align='center' width='800' border='1' cellpadding='2' cellspacing='2' 
				style='border-collapse: collapse;'>
		  	<tr style='background-color: #0084ab;' align='center'>
				<td><b>Mã NV</b></td>
                <td><b>Họ NV</b></td>
				<td><b>Tên NV</b></td>
                <td><b>Ngày sinh</b></td>
                <td><b>Giới tính</b></td>
				<td><b>Địa chỉ</b></td>
				<td><b>Ảnh</b></td>
				<td><b>Mã loại</b></td>
				<td><b>Mã phòng</b></td>
                <td colspan ='3'><b>Action</b></td>
		  	</tr>";
		$stt = 1;
		while ($row = mysqli_fetch_array($result)) {
			if ($stt % 2 != 0) {
				echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td>$row[4]</td>";
				echo "<td>$row[5]</td>"; ?>
				<td><img style='width:50px;height:50px; border-radius:50%;' src="hinh_nv/<?= $row[6]; ?>"></td>
				<?php
				echo "<td>$row[7]</td>";
				echo "<td>$row[8]</td>"; ?>
				<td><a href="edit_nv.php?id=<?php echo $row['MaNV']; ?>">Sửa</a></td>
				<td><a href="delete_nv.php?id=<?php echo $row['MaNV']; ?>" onclick="return confirm('Bạn có muốn xóa?');">Xóa</a></td>
			<?php
				// echo "<td><a href=\"themnv.php\">Thêm</a></td>";
				echo "</tr>";
			} else {
				echo "<tr style='background-color: #ffb1007a;'>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td>$row[4]</td>";
				echo "<td>$row[5]</td>"; ?>
				<td><img style='width:50px;height:50px; border-radius:50%;' src="hinh_nv/<?= $row[6]; ?>"></td>
				<?php
				echo "<td>$row[7]</td>";
				echo "<td>$row[8]</td>"; ?>
				<td><a href="edit_nv.php?id=<?php echo $row['MaNV']; ?>">Sửa</a></td>
				<td><a href="delete_nv.php?id=<?php echo $row['MaNV']; ?>" onclick="return confirm('Bạn có muốn xóa?');">Xóa</a></td>
	<?php
				echo "</tr>";
				echo "</tr>";
			}
			$stt += 1;
		}
		echo '</table>';
		echo "<button align='center' class=\"btn btn-succes\"> <a href=\"themnv.php\">Thêm</a></button>" . "<br>";

		$re = mysqli_query($dbc, 'select * from nhanvien');
        //tổng số mẩu tin cần hiển thị
        $numRows = mysqli_num_rows($re);
        //tổng số trang
        $maxPage = floor($numRows / $rowsPerPage) + 1;?>
        <div align="center">
            <ul class="pagination" stype="justify-content:center">
            <?php
                if($_GET['page']==1){
                    echo "<b class = 'page-item disabled'>
                    <span class='page-link'>Trang đầu</span></b>";
                    echo "<b class = 'page-item disabled'>
                    <span class='page-link'><</span></b>"; 
                }
                else {
                    $rowsPrePage = $_GET['page']-1;
                    echo "<b class = 'page-item'>
                    <a class='page-link' href='?page=1'>Trang đầu</a></b>";
                    echo "<b class = 'page-item'>
                    <a class='page-link' href='?page=$rowsPrePage'><</a></b>"; 
                }
                for($i=1;$i<=$maxPage;$i++){
                    if($_GET['page']==$i){
                        echo "<b class='page-item active' aria-current='page'>
                        <a class='page-link' href='?page=$i'>$i</a></b>";
                    } else {
                        echo "<b class='page-item active' aria-current='page'>
                        <a class='page-link' href='?page=$i'>$i</a></b>";
                    }
                }
                if($_GET['page']==$rowsPerPage){
                    echo "<b class = 'page-item disabled'>
                    <span class='page-link'>></span></b>";
                    echo "<b class = 'page-item disabled'>
                    <span class='page-link'>Trang cuối</span></b>"; 
                }
                else {
                    $nextPage = $_GET['page']+1;
                    echo "<b class = 'page-item' >
                    <a class='page-link' href='?page=$nextPage'>></a></b>";
                    echo "<b class = 'page-item'>
                    <a class='page-link' href='?page=$maxPage'>Trang cuối</a></b>"; 
                }
            ?>
            </ul>
            </div>

    <?php
	}
	//Dong ket noi
	mysqli_close($dbc);
	echo "<a href=\"index.php\">Trở lại</a>";
	?>
</body>

</html>
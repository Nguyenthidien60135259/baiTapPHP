<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thông tin mặt hàng</title>
</head>

<body>
    <?php
    $mathang = array(
        array(
            "mamh" => "A001",
            "tenmh" => "Sửa tắm Xmen",
            "dvt" => "Chai 50ml",
            "sl" => 50
        ),
        array(
            "mamh" => "A002",
            "tenmh" => "Dầu gội Lifeboy",
            "dvt" => "Chai 50ml",
            "sl" => 20
        ),
        array(
            "mamh" => "B001",
            "tenmh" => "Dầu ăn Cái Lân",
            "dvt" => "Chai 1 lít",
            "sl" => 10
        ),
        array(
            "mamh" => "B002",
            "tenmh" => "Đường cát",
            "dvt" => "Kg",
            "sl" => 15
        ),
        array(
            "mamh" => "C001",
            "tenmh" => "Chén sứ Minh Long",
            "dvt" => "Bộ 10 cái",
            "sl" => 2
        ),
    );
    ?>
    <fieldset>
        <div>
            <h2>Thông tin mặt hàng</h2>
            <table class="table-bordered  mt-5" align="left" border="1">
                <tr style="color:tomato">
                    <th>
                        <b>Mã Mặt hàng</b>
                    </th>
                    <th><b>Tên mặt hàng</b></th>
                    <th>
                        <b>Đơn vị tính</b>
                    </th>
                    <th>
                        <b>Số lượng</b>
                    </th>
                </tr>
                <?php
                foreach ($mathang as $k => $v) { ?>
                    <tr>
                        <!-- <td><?php echo $k; ?></td> -->
                        <td><?php echo $v['mamh'] ?></td>
                        <td><?php echo $v['tenmh'] ?></td>
                        <td><?php echo $v['dvt'] ?></td>
                        <td><?php echo $v['sl'] ?></td>
                    </tr>
                <?php }
                ?>

            </table>
        </div>

    </fieldset>
    <?php
    if (isset($_POST['mamh'])) {
        $mamh = trim($_POST['mamh']);
    } else $mamh = NULL;

    if (isset($_POST['tenmh']))
        $tenmh = trim($_POST['tenmh']);
    else $tenmh = NULL;

    if (isset($_POST['dvt']))
        $dvt = trim($_POST['dvt']);
    else $dvt = NULL;

    if (isset($_POST['sl'])) {
        $sl = $_POST['sl'];
    } else
        $sl = 0;

    if (isset($_POST['them'])) {
        $arr = array(
            'mamh' => "$mamh",
            "tenmh" => "$tenmh",
            "dvt" => "$dvt",
            "sl" => "$sl"
        );
        array_push($mathang, $arr);
    }
    ?>

    <form align='left' action="" method="post">
        <table>
            <thead>
                <th colspan="3" align="center">
                    <h3>Nhập thông tin mặt hàng</h3>
                </th>
            </thead>

            <tr>
                <td>Mã MH:</td>
                <td><input type="text" name="mamh" value="<?php echo $mamh ?>" /></td>
            </tr>
            <tr>
                <td>Tên MH:</td>
                <td><input type="text" name="tenmh" value="<?php echo $tenmh ?>" /></td>
            </tr>
            <tr>
                <td>Đơn vị tính:</td>
                <td><input type="text" name="dvt" value="<?php echo $dvt ?>" /></td>
            </tr>
            <tr>
                <td>Số lượng:</td>
                <td><input type="text" name="sl" value="<?php echo $sl ?>" /></td>
            </tr>
            <tr>
                <td colspan="3" align="left"><input type="submit" value="Thêm" name="them" /></td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td name="kq" disabled="disabled">
                    <div>
                        <h2>Thông tin mặt hàng sau khi nhập</h2>
                        <table class="table-bordered  mt-5" align="left" border="1">
                            <tr style="color:tomato">
                                <th>
                                    <b>Mã Mặt hàng</b>
                                </th>
                                <th><b>Tên mặt hàng</b></th>
                                <th>
                                    <b>Đơn vị tính</b>
                                </th>
                                <th>
                                    <b>Số lượng</b>
                                </th>
                            </tr>
                            <?php
                            foreach ($mathang as $k => $v) { ?>
                                <tr>
                                    <!-- <td><?php echo $k ?></td> -->
                                    <td><?php echo $v['mamh'] ?></td>
                                    <td><?php echo $v['tenmh'] ?></td>
                                    <td><?php echo $v['dvt'] ?></td>
                                    <td><?php echo $v['sl'] ?></td>
                                </tr>
                            <?php }
                            ?>

                        </table>
                    </div>

                </td>
            </tr>
        </table>

    </form>

</body>

</html>
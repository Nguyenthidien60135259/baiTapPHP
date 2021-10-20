<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>bài 2 lab4</title>
    <style type="text/css">
        /* body {  
            background-color: #d24dff;
        } */
        table {
            background: #24b22299;
            border: 0 solid #24b222;
        }

        thead {
            background: #fff14d;
        }

        td {
            color: blue;
        }

        h3 {
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff2f00;
            font-size: medium;
        }
    </style>
</head>

<body>

    <?php
    $tinh ="";
    $day="";
    if (isset($_POST['tinh'])) {
        $day = trim($_POST['day']);
        $arr = explode(",", $day);
        $tinh = array_sum($arr);
    }

    ?>


    <form align='center' action="" method="post">
        <table>
            <thead>
                <th colspan="3" align="center">
                    <h3>Nhập và tính trên dãy số</h3>
                </th>
            </thead>

            <tr>
                <td>Nhập dãy số:</td>
                <td><input type="text" name="day" value="<?php echo $day?>" /></td>
                <td>(*)</td>
            </tr>

            <tr>
                <td colspan="3" align="center"><input type="submit" value="Tổng dãy số" name="tinh" /></td>
            </tr>

            <tr>
                <td>Tổng dãy số:</td>
                <td><input type="text" name="tinh" disabled="disabled" value="<?php echo $tinh; ?> " /></td>
            </tr>



        </table>
    </form>

</body>

</html>
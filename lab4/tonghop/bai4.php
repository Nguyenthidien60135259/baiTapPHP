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
    $ketqua = "";
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
    } else $n = 0;

    if (isset($_POST['m'])) {
        $m = $_POST['m'];
    } else $m = 0;


    if (isset($_POST['hthi'])) {
        //in matran
        $arr = array();
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $arr[$i][$j] = rand(-200, 200);
            }
        }

        //dếm các số cuối là số lẻ
        // foreach ($arr as $value=>$value) {
        //     $soCuoi = $arr[$i][$j] % 10;
        //     $dem =0;
        //     if ($soCuoi % 2 != 0){
        //         $dem ++;
        //     }
        // }
        $dem=0;
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr); $j++){
                $soCuoi = $arr[$i][$j] % 10;
                if ($soCuoi % 2 != 0)
                    $dem++;
            }           
        }

        // //thay the cac phan tu khac 0 thanh 1
        // for ($i = 0; $i < $n; $i++) {
        //     for ($j = 0; $j < $m; $j++) {
        //         $arr1=$arr;
        //         if($arr[$i][$j] != 0){
        //             echo " ". $arr1[$i][$j]=1;
        //         }
        //         echo "\n";
        //     }
        // }

    }

    ?>


    <form align='center' action="" method="post">
        <table>
            <thead>
                <th colspan="3" align="center">
                    <h3>Ma Trận</h3>
                </th>
            </thead>

            <tr>
                <td>Nhập n:</td>
                <td><input type="text" name="n" value="<?php echo $n ?>" /></td>
            </tr>
            <tr>
                <td>Nhập m:</td>
                <td><input type="text" name="m" value="<?php echo $m ?>" /></td>
            </tr>

            <tr>
                <td colspan="3" align="left"><input type="submit" value="Hiển thị" name="hthi" /></td>
            </tr>

            <tr>
                <td>Kết quả:</td>
                <td name="ketqua" align="left">
                    <textarea cols="70" rows="10">
                     <?php
                        echo "Ma trận $n x $m:" . "\n";
                        for ($i = 0; $i < $n; $i++) {
                            for ($j = 0; $j < $m; $j++) {
                                echo $arr[$i][$j] . " ";
                            }
                            echo "\n";
                        }

                        echo "Đếm số cuối lẻ: ";
                        echo $dem."\n";

                        echo "Ma trận sau khi thay !=0 bằng 1:" . "\n";
                        for ($i = 0; $i < $n; $i++) {
                            for ($j = 0; $j < $m; $j++) {
                                if($arr[$i][$j] != 0){
                                    echo " ".$arr[$i][$j]=1;
                                }               
                        }
                        echo "\n ";
                    }
                        ?>
                    </textarea>
                </td>
            </tr>

        </table>
    </form>

</body>

</html>
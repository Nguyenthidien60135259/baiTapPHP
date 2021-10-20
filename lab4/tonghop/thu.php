<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>XSKT Khanh Hoa lab4</title>
    <style type="text/css">
        /* body {  
            background-color: #d24dff;
        } */
        table {
            background: whitesmoke;
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

<?php
        if(isset($_POST['ve'])){
            $ve=$_POST['ve'];
        } 
        else $ve=0;

    // if(($_SERVER['REQUEST_METHOD']=="POST")){
        // if(isset($_POST['kq'])){
        //     // $chuoi= $_POST['kqd'];
        //     $chuoi="";
        //     $ve = $_POST['ve'];
        //     $kt=true;//kt vé có đủ 6 số hay ko
        //     foreach($ve as $a){
        //         if($a<6){
        //             $kt = false;
        //             break;
        //         }
        //     }
            
        //     if($kt== true){
        //         switch ($chuoi){
        //             case 'giai8':
        //                 if($ve[-2]==$giai8)
        //                     echo $kq= "Bạn đã trúng giải 8";
        //                 break;
        //             case 'giai7':
        //                 if($ve[-3]==$giai7)
        //                     echo $kq= "Bạn đã trúng giải 7";
        //                 break;
        //             case 'giai6':
        //                 $chuoitach = explode(" ", $giai6);
        //                 if($ve[-4]==$$chuoitach)
        //                     echo $kq="bạn đã trúng giải 6";
        //                 break;
        //             case 'giai7':
        //                 if($ve[-4]==$giai5)
        //                     echo $kq="Bạn đã trúng giải 5";
        //                 break;
        //             case 'giai4':
        //                 $chuoitach = explode(" ", $giai4);
        //                 if($ve[-5]==$$chuoitach)
        //                     echo $kq="bạn đã trúng giải 4";
        //                 break;
        //             case 'giai3':
        //                 if($ve[-5]==$giai3)
        //                     echo $kq="Bạn đã trúng giải 3";
        //                 break;
        //             case 'giai2':
        //                 if($ve[-5]==$giai2)
        //                     echo $kq="Bạn đã trúng giải nhì";
        //                 break;
        //             case 'giai1':
        //                 if($ve[-5]==$giai1)
        //                     echo $kq="Bạn đã trúng giải nhất";
        //                 break;
        //             case 'giaiDB':
        //                 if($ve[-5]==$giaiDB)
        //                     echo $kq="Chúc mừng Bạn đã trúng giải ĐẶC BIỆT";
        //                 break;
        //             default:
        //                 echo $kq="Chúc bạn may mắn lần sau";
        //                 break;
        //     }

        // } 
    // }

?>

<body>


    <form align='center' action="" method="post">
        <h3>Xổ số Khánh Hòa ngày <?php echo date("d/m/Y") ?></h3>
        Nhập vé số: <input type="text" name="ve" value="<?php echo $ve ?>" />
        <input type="submit" name="hthi" value="Hiển thị" /><br>
        Kết quả xổ xố <br>
        <table align="center" name="kqd">
            <tr>
                <td>Giải 8:</td>
                <td name="giai8">
                <input type="text" name="dayso" value="
                    <?php
                    $digits8 = 2;
                    $giai8 = str_pad(Rand(0, pow(10, $digits8) - 1), $digits8, '0', STR_PAD_LEFT);
                    echo $dayso = $giai8;

                    ?>"/>
                </td>
            </tr>
            <tr>
                <td>Giải 7:</td>
                <td name="giai7">
                    <?php
                    $digits7 = 3;
                    $giai7 = str_pad(Rand(0, pow(10, $digits7) - 1), $digits7, '0', STR_PAD_LEFT);
                    echo $dayso = $giai7;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Giải 6:</td>
                <td name="giai6">
                    <?php
                    $digits6 = 4;
                    for ($i = 0; $i < 4; $i++) {
                        $giai6 = str_pad(Rand(0, pow(10, $digits6) - 1), $digits6, '0', STR_PAD_LEFT) . " ";
                        echo $dayso = $giai6;
                    }

                    ?>
                </td>
            </tr>
            <tr>
                <td>Giải 5:</td>
                <td name="giai5">
                    <?php
                    $digits5 = 4;
                    $giai5 = str_pad(Rand(0, pow(10, $digits5) - 1), $digits5, '0', STR_PAD_LEFT);
                    echo $dayso = $giai5;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Giải 4:</td>
                <td name="giai4">
                    <?php
                    $digits4 = 5;
                    for ($i = 0; $i < 5; $i++) {
                        $giai4 = str_pad(Rand(0, pow(10, $digits4) - 1), $digits4, '0', STR_PAD_LEFT) . " ";
                        echo $dayso = $giai4;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Giải 3:</td>
                <td name="giai3">
                    <?php
                    $digits3 = 5;
                    $giai3 = str_pad(Rand(0, pow(10, $digits3) - 1), $digits3, '0', STR_PAD_LEFT);
                    echo $dayso = $giai3;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Giải 2:</td>
                <td name="giai2">
                    <?php
                    $digits2 = 5;
                    $giai2 = str_pad(Rand(0, pow(10, $digits2) - 1), $digits2, '0', STR_PAD_LEFT);
                    echo $dayso = $giai2;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Giải nhất:</td>
                <td name="giai1">
                    <?php
                    $digits1 = 5;
                    $giai1 = str_pad(Rand(0, pow(10, $digits1) - 1), $digits1, '0', STR_PAD_LEFT);
                    echo $dayso = $giai1;
                    ?>
                </td>
            </tr>
            <tr>
                <td style="color:red">Giải BD:</td>
                <td style="color:red" name="giaiDB">
                    <?php
                    $digits = 6;
                    $giaiDB = array();
                    $giaiDB = str_pad(Rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
                    echo $dayso = $giaiDB;
                    ?>
                </td>
            </tr>
        </table>

        Kết quả dò: <input type="text" name="kq" disabled="disabled" value="<?php echo $kq ?>" />
    </form>

</body>

</html>

<?php 
    session_start();
?>
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



<body>

<?php
        if(isset($_POST['ve'])){
            $ve=$_POST['ve'];
        } 
        else $ve=0;
        $kqd="";
        $chuoi ="";
    if(($_SERVER['REQUEST_METHOD']=="POST")){
        // if(isset($_POST['kqd'])){
            $ve = $_POST['ve'];
                switch ($chuoi){
                    case 'giai8':
                        if(substr($ve,-2) ==$giai8){
                             $kqd= "Bạn đã trúng giải 8";
                        }
                    case 'giai7':
                        if(substr($ve,-3) ==$giai7){
                            $kqd= "Bạn đã trúng giải 7";
                        }
                    case 'giai6':
                        $chuoitach = explode(" ", $giai6);
                        if(substr($ve,-4) ==$$chuoitach){
                            $kqd= "bạn đã trúng giải 6";
                        }
                    case 'giai7':
                        if(substr($ve,-4)==$giai5){
                            $kqd= "Bạn đã trúng giải 5";
                        }
                    case 'giai4':
                        $chuoitach = explode(" ", $giai4);
                        if(substr($ve,-5)==$$chuoitach){
                            $kqd= "bạn đã trúng giải 4";
                        }
                    case 'giai3':
                        if(substr($ve,-5)==$giai3){
                            $kqd= "Bạn đã trúng giải 3";
                        }
                    case 'giai2':
                        if(substr($ve,-5)==$giai2){
                            $kqd= "Bạn đã trúng giải nhì";
                        }
                    case 'giai1':
                        if(substr($ve,-5)==$giai1){
                            $kqd= "Bạn đã trúng giải nhất";
                        }
                    case 'giaiDB':
                        if(substr($ve,-6)==$giaiDB){
                            $kqd= "Bạn đã trúng giải ĐẶC BIỆT";
                        }
                    default:
                        $kqd= 'Chúc bạn may mắn lần sau';
                
            }

        } 

    // }

?>
    <form align='center' action="" method="post">
        <h3>Xổ số Khánh Hòa ngày <?php echo date("d/m/Y") ?></h3>
        Nhập vé số: <input type="text" name="ve" value="<?php echo $ve ?>" />
        <input type="submit" name="hthi" value="Hiển thị" /><br>
        Kết quả xổ xố <br>
        <table align="center" name="kq">

            <tr>
                <td>Giải 8:</td>
                <td name="giai8">
                     <?php
                    $digits8 = 2;
                    $giai8 = isset($_POST['giai8'])?$_POST['giai8']:str_pad(Rand(0, pow(10, $digits8) - 1), $digits8, '0', STR_PAD_LEFT);
                    echo $dayso = $giai8;

                    ?> 
                </td>
            </tr>
            <tr>
                <td>Giải 7:</td>
                <td name="giai7">
                    <?php
                    $digits7 = 3;
                    $giai7 = isset($_POST['giai7'])?$_POST['giai7']:str_pad(Rand(0, pow(10, $digits7) - 1), $digits7, '0', STR_PAD_LEFT);
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
                        $giai6 = isset($_POST['giai6'])?$_POST['giai6']:str_pad(Rand(0, pow(10, $digits6) - 1), $digits6, '0', STR_PAD_LEFT) . " ";
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
                    $giai5 = isset($_POST['giai5'])?$_POST['giai5']:str_pad(Rand(0, pow(10, $digits5) - 1), $digits5, '0', STR_PAD_LEFT);
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
                        $giai4 = isset($_POST['giai4'])?$_POST['giai4']:str_pad(Rand(0, pow(10, $digits4) - 1), $digits4, '0', STR_PAD_LEFT) . " ";
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
                    $giai3 = isset($_POST['giai3'])?$_POST['giai3']:str_pad(Rand(0, pow(10, $digits3) - 1), $digits3, '0', STR_PAD_LEFT);
                    echo $dayso = $giai3;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Giải 2:</td>
                <td name="giai2">
                    <?php
                    $digits2 = 5;
                    $giai2 = isset($_POST['giai2'])?$_POST['giai2']:str_pad(Rand(0, pow(10, $digits2) - 1), $digits2, '0', STR_PAD_LEFT);
                    echo $dayso = $giai2;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Giải nhất:</td>
                <td name="giai1">
                    <?php
                    $digits1 = 5;
                    $giai1 =isset($_POST['giai1'])?$_POST['giai1']: str_pad(Rand(0, pow(10, $digits1) - 1), $digits1, '0', STR_PAD_LEFT);
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
                    $giaiDB = isset($_POST['giaiDB'])?$_POST['giaiDB']: str_pad(Rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
                    echo $dayso = $giaiDB;
                    ?>
                </td>
            </tr>
        </table>
        <span name="kqd"> 
            <?php
                echo "kết quả dò : $kqd";
            ?>
        </span>

        <!-- Kết quả dò: <input type="text" name="kqd" disabled="disabled" value="<?php echo $kqd ?>" /> -->
    </form>
   
</body>

</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính tiền điện</title>
    <style type="text/css">
        /* body {  
            background-color: #d24dff;
        } */
        table{
            background: #24b22299;
            border: 0 solid #24b222;
        }
        thead{
           background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
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
    
    if(isset($_POST['ten']))  
        $ten=trim($_POST['ten']); 
    else $ten=NULL;
    
    if(isset($_POST['chisocu'])) 
        $chisocu=trim($_POST['chisocu']); 
    else $chisocu=0;

    if(isset($_POST['chisomoi'])) 
        $chisomoi=trim($_POST['chisomoi']); 
    else $chisomoi=0;

    //&& (is_numeric($chisomoi)>is_numeric($chisocu))) 

    if(isset($_POST['dongia'])) 
        $dongia=trim($_POST['dongia']);
    
    if(isset($_POST['tinh']))
        if (is_numeric($chisocu)&& is_numeric($chisomoi)&& is_numeric($dongia))  
                $sotien=($chisomoi - $chisocu) * $dongia;
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                    $sotien="";
                }
    else $sotien=0;
?>


<form align='center' action="" method="post">
    <table>
        <thead>
            <th colspan="3" align="center"><h3>THANH TOÁN TIỀN ĐIỆN</h3></th>
        </thead>

        <tr><td>Tên chủ hộ:</td>
        <td><input type="text" name="ten" value="<?php  echo $ten;?> "/></td>
        </tr>

        <tr><td>Chỉ số cũ:</td>
        <td><input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/></td>
        <td>(Kw)</td>
        </tr>

        <tr><td>Chỉ số mới:</td>
        <td><input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/></td>
        <td>(Kw)</td>
        </tr>

        <tr><td>Đơn giá:</td>
        <td><input type="text" name="dongia" readonly="true" value="2000"/></td>
        <td>(VNĐ)</td>
        </tr>

        <tr><td>Số tiền thanh toán:</td>
        <td><input type="text" name="sotien" disabled="disabled" value="<?php  echo $sotien;?> "/></td>
        <!-- <td><input type="text" name="sotien" readonly="true" value="<?php  echo $sotien;?> "/></td> -->
        <td>(VNĐ)</td>
        </tr>

        <tr>
            <td colspan="3" align="center"><input type="submit" value="Tính" name="tinh" /></td>
        </tr>

    </table>
</form>

</body>

</html>

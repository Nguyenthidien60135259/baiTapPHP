<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính 2 số</title>
    <style type="text/css">
        /* body {  
            background-color: #d24dff;
        } */
        table{
            background: #24b22299;
            border: 0 solid #24b222;
        }
        thead{
           background:#4dffe6;    
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
<form>
    <table>
        <thead>
            <th colspan="2" align="center"><h3>Phép tính trên 2 số</h3></th>
        </thead>

            <tr><td>Chọn phép tính: </td>
            <td><?php echo $_POST['radGT']; ?></td>          
            </tr>

            <tr><td>Số 1:</td>
            <td><?php if(($_POST['a']))  
                    echo $a=trim($_POST['a']); 
                 ?></td>
            </tr>

            <tr><td>Số 2:</td>
            <td><?php if(($_POST['b']))  
                    echo $b=trim($_POST['b']); 
                 ?></td>
            </tr>

            <tr><td>Kết quả:</td>
            <td>
                <?php
                    function pheptinh($pt,$a,$b){
                        if($pt=="Cộng"){
                            return $a+$b;
                        }
                        else if($pt=="Trừ"){
                            return $a-$b;
                            }
                        else if($pt=="Nhân"){
                            return $a*$b;
                            }
                        else if($pt=="Chia"){
                            if($b != 0){
                                return $a/$b;
                                }
                            else
                                echo "không thể chia cho 0";
                            }
                    }
                    if (is_numeric($a)&& is_numeric($b)){
                        $a=$_POST['a'];
                        $b=$_POST['b'];
                        $pt = $_POST['radGT'];
                        if($pt == "Cộng"){
                            $kq = pheptinh($pt,$a,$b);
                            echo $kq;
                        }
                        else if($pt == "Trừ"){
                            $kq = pheptinh($pt,$a,$b);
                            echo $kq;
                        }
                        else if($pt == "Nhân"){
                            $kq = pheptinh($pt,$a,$b);
                            echo $kq;
                        }
                        else if($pt == "Chia"){
                            $kq = pheptinh($pt,$a,$b);
                            echo $kq;
                        }
                    }
                    else echo "không tính được";
                ?>  
            </td>
            </tr>
            <tr>
                <td></td>
                <td><a href="javascript:window.history.back(-1);">Quay lại trang trước</a></td>

                <!-- <td> <button type="button" onclick="quay_lai()">Quay lại trang trước</button></td>
                <script>
                    function quay_lai(){
                        history.back();
                    }
                </script> -->
            </tr>
            
        </table>
    </form>

</body>
</html>
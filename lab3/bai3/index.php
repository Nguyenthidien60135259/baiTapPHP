
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

    <form action="tinh1.php" method="post">
        <table>
            <thead>
                <th colspan="2" align="center"><h3>Phép tính trên 2 số</h3></th>
            </thead>

            <tr><td>Chọn phép tính:</td>
                <td>
                    <input type="radio" name="radGT" value="Cộng"<?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Công') echo 'checked="checked"';?>/> Cộng
                    <input type="radio" name="radGT" value="Trừ" <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Trừ') echo 'checked="checked"';?>/> Trừ
                    <input type="radio" name="radGT" value="Nhân" <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nhân') echo 'checked="checked"';?>/> Nhân
                    <input type="radio" name="radGT" value="Chia" <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Chia') echo 'checked="checked"';?>/> Chia
                </td>
            </tr>

            <tr><td>Số thứ nhất:</td>
            <td><input type="text" name="a" value=""/></td>
            </tr>

            <tr><td>Số thứ nhì:</td>
            <td><input type="text" name="b" value=""/></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>

        </table>
    </form>
</body>

</html>

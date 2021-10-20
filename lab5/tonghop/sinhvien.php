<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>thông tin</title>
    <script type="text/javascript" src="javascript.js"> </script>
    <style>
        fieldset {
            background-color: #eeeeee;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
        }

        input {
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    abstract class Nguoi
    {
        protected $hoten, $diachi, $gioitinh;

        public function setHoTen($hoten)
        {
            $this->hoten = $hoten;
        }
        public function getHoTen()
        {
            return $this->hoten;
        }
        public function setDiaChi($diachi)
        {
            $this->diachi = $diachi;
        }
        public function getDiaChi()
        {
            return $this->diachi;
        }
        public function setGioiTinh($gioitinh)
        {
            $this->gioitinh = $gioitinh;
        }
        public function getGioiTinh()
        {
            return $this->gioitinh;
        }
        abstract public function tinh();
    }
    class SinhVien extends Nguoi
    {
        public $lophoc, $nganh;
        

        public function setLop($lop)
        {
            $this->lop = $lop;
        }
        public function getLop()
        {
            return $this->lop;
        }
        public function setNganh($nganh)
        {
            $this->nganh = $nganh;
        }
        public function getNganh()
        {
            return $this->nganh;
        }

        public function tinh()
        {
            if ($this->nganh == 'KT') {
                return 1.5;
            }
            if ($this->nganh == 'CNTT') {
                return 1;
            }
        }
    }
    class giangVien extends Nguoi
    {
        public $trinhdo;
        const luongcb = 1500000;

        public function setTrinhDo($trinhdo)
        {
            $this->trinhdo = $trinhdo;
        }
        public function getTrinhDo()
        {
            return $this->trinhdo;
        }


        public function tinh()
        {
            if ($this->trinhdo == 'CN') {
                return self::luongcb * 2.34;
            }
            if ($this->trinhdo == 'ThS') {
                return self::luongcb * 3.67;
            }
            if ($this->trinhdo == 'TS') {
                return self::luongcb * 5.66;
            }
        }
    }

    $str = NULL;
    if (isset($_POST['hthi'])) {

        if (isset($_POST['dt']) && ($_POST['dt']) == 'sv') {
            $sv = new SinhVien();
            $sv->setHoTen($_POST['hoten']);
            $sv->setDiaChi($_POST['diachi']);
            $sv->setGioiTinh($_POST['gioitinh']);
            $sv->setLop($_POST['lop']);
            $sv->setNganh($_POST['nganh']);
            $str = $sv->getHoTen() . "\n" . $sv->getDiaChi() . "\n" . $sv->getGioiTinh()."\n" . $sv->getLop()."\n" . $sv->getNganh() . "\n" . $sv->tinh();
        }
        if (isset($_POST['dt']) && ($_POST['dt']) == "gv") {
            $gv = new giangVien();
            $gv->setHoTen($_POST['hoten']);
            $gv->setDiaChi($_POST['diachi']);
            $gv->setGioiTinh(($_POST['gioitinh']));
            $gv->setTrinhDo($_POST['trinhdo']);
            $str = $gv->getHoTen() . "\n" . $gv->getDiaChi() . "\n" . $gv->getGioiTinh() . "\n" . $gv->getTrinhDo() . "\n" . $gv->tinh();
        }
    }
    ?>
    <script>
        function checkInput(dt) {
            if (dt == 'sv') {
                document.getElementById('trinhDoId').style.display = 'none';
                document.getElementById('nganhID').style.display = 'revert';
                document.getElementById('lopID').style.display = 'revert';
            } else {
                document.getElementById('trinhDoId').style.display = 'revert';
                document.getElementById('nganhID').style.display = 'none';
                document.getElementById('lopID').style.display = 'none';
            }
        }
    </script>

    <form action="" method="post">
        <fieldset>
            <legend>Thông tin</legend>
            <table border='0'>
                <tr>
                    <td>Chọn Đối tượng</td>
                    <td><input type="radio" name="dt" value="sv" onchange="checkInput('sv');" <?php if (isset($_POST['dt']) && ($_POST['dt']) == "sv") echo 'checked' ?> />Sinh Viên
                        <input type="radio" name="dt" value="gv" onchange="checkInput('gv');" <?php if (isset($_POST['dt']) && ($_POST['dt']) == "gv") echo 'checked' ?> />Giảng viên
                    </td>
                </tr>
                <tr>
                    <td>Nhập tên:</td>
                    <td><input type="text" name="hoten" value="<?php if (isset($_POST['hoten'])) echo $_POST['hoten']; ?>" /></td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="diachi" value="<?php if (isset($_POST['diachi'])) echo $_POST['diachi']; ?>" /></td>
                </tr>
                <tr>
                    <td>Giới tính:</td>
                    <td>
                        <input type="radio" name="gioitinh" value="nam" <?php if (isset($_POST['gioitinh']) && ($_POST['gioitinh']) == "nam") echo 'checked' ?>>Nam
                        <input type="radio" name="gioitinh" value="nu" <?php if (isset($_POST['gioitinh']) && ($_POST['gioitinh']) == "nu") echo 'checked' ?>>Nữ
                    </td>
                </tr>
                <tr id="trinhDoId">
                    <td>Trình độ:</td>
                    <td>
                        <input type="radio" name="trinhdo" value="CN" <?php if (isset($_POST['trinhdo']) && ($_POST['trinhdo']) == "CN") echo 'checked' ?>>Cử nhân
                        <input type="radio" name="trinhdo" value="ThS" <?php if (isset($_POST['trinhdo']) && ($_POST['trinhdo']) == "ThS") echo 'checked' ?>> Thạc sĩ
                        <input type="radio" name="trinhdo" value="TS" <?php if (isset($_POST['trinhdo']) && ($_POST['trinhdo']) == "TS") echo 'checked' ?>>Tiến Sĩ
                    </td>
                </tr>

                <tr id="lopID">
                    <td>Lớp:</td>
                    <td><input type="text" name="lop" value="<?php if (isset($_POST['lop'])) echo $_POST['lop']; ?>" /></td>
                </tr>

                <tr id="nganhID" >
                    <td>Ngành học</td>
                    <td><input type="radio" name="nganh" value="CNTT" <?php if (isset($_POST['nganh']) && ($_POST['nganh']) == "CNNT") echo 'checked' ?>> CNTT
                        <input type="radio" name="nganh" value="KT" <?php if (isset($_POST['nganh']) && ($_POST['nganh']) == "KT") echo 'checked' ?>>Kinh tế
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" name="hthi" value="hiển thị" /></td>
                </tr>

                <tr>
                    <td>Kết quả:</td>
                    <td><textarea name="ketqua" cols="70" rows="4" disabled="disabled"><?php echo $str; ?></textarea></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
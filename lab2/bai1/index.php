<html>
    <body>
        <?php
            $so = rand(10,1000);
            echo "Số được tạo ra: $so <br>";
            //cau a
            function isPrimeNumber($n) {
                // ktra so nguyen to
                $squareRoot = sqrt ( $n );
                for($i = 2; $i <= $squareRoot; $i ++) {
                    if ($n % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
            
            //cau c
            function numberMax($so){
                if($so==0)
                    return 0;
                $so = abs($so);
                $max = 0;
                while($so>0){
                    $temp = $so % 10;
                    $so/=10; // $so /10
                    if($temp > $max)
                        $max = $temp;
                }
                return $max;
            }
            echo "Câu a"."<br>";
            echo ("Các số nguyên tố nhỏ hơn $so là: <br>");
            for($i = 0; $i < $so; $i ++) {
                if (isPrimeNumber ( $i )) {
                    echo ($i . " ");
                }
            }
            echo "<br>";
            echo "Câu c"."<br>";
            echo "Chữ số lớn nhất trong số nguyên dương này là: \n".numberMax($so);
            echo "<br>";
            // cau b
            function dem($so)
            {
                //Bien dem so chu so
                $count=0;    
                while($so >= 10)
                {
                    $so= $so / 10;          
                    $count++;
                }
                return $kq=$count+1;
            }
            echo "câu b"."<br>";
            echo "Số nguyên này có \n".dem($so)."\n chữ số";
            // echo "<br>";
            // echo "câu b"."<br>";
            // $so = $so . "";
            // echo "Số nguyên này có số chữ số: ";
            // echo strlen($so);
        ?>
    </body>    
</html>
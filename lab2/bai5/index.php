<?php
    $so = rand(-100,100);
    echo $so."<br>";
    //mở file và cho phép ghi
    $myfile = fopen("soNT.txt","a");
    function ktra_soNT($so)
    {
        if($so>0){
            for ($i = 2; $i <= sqrt($so); $i++) {
                if ($so % $i == 0){
                    return false;
                }
            }
            return true;
        }
        else
            echo "Đây là số âm"."<br>";        
    }
    if(ktra_soNT($so)){
        echo "{$so} là số nguyên tố";
        fwrite($myfile, $so);
    }
    else
        echo "{$so} không là số nguyên tố";
        
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Xử lý n</title>
</head>
<body>

<?php


	if(isset($_POST['n'])){
        $n=$_POST['n'];
    } 
	else $n=0;

	$ketqua="";
	// function sapxepMang(&$arr,&$ketqua){
	// 	asort($arr);
    //     $sapxep="Mảng được sắp xếp:" .implode(" ",$arr)."\n";
	// 	$ketqua = $sapxep;
	// }
	// function themSo($a,$x,&$arr,&$ketqua){
	// 	array_splice( $arr, $a, 0, $x );
	// 	$vitri= $a+1;
	// 	//In ra mảng vừa tạo
	// 	$them="Mảng sau khi thêm $x vào vị trí $vitri: " .implode(" ",$arr)."\n";
	// 	$ketqua. =$them;
	// }

	// function SXTangGiam($a,$x,$n,&$arr,&$ketqua){
	// 	$arr1= array();
	// 	for ($i=0;$i<$a;$i++){
	// 		$arr1[$i]=$arr[$i];
	// 	}
	// 	asort($arr1);
	// 	$arr2= array();
	// 	for ($i=$n;$i>$a;$i--){
	// 		$arr2[$i]=$arr[$i];
	// 	}
	// 	asort($arr2);
	// 	array_push($arr1,$x);
	// 	$arr= $arr1+$arr2;
	// 	$sapxep2= "\n Mảng sau khi sắp xếp:".implode(" ",$arr);
	// 	$ketqua.=$sapxep2;
	// }

	if(isset($_POST['hthi'])) 
	{	//Tạo mảng có n phần tử, các phần tử có giá trị [-100,100]
		$arr=array();
		for($i=0;$i<$n;$i++)
		{
			$x=rand(-100,100);
			$arr[$i]=$x;
		}
		//In ra mảng vừa tạo
		$ketqua.="\nMảng được tạo là:" .implode(" ",$arr)."\n";
        //Sắp xếp mảng
        //sapxepMang($arr,$ketqua);
		asort($arr);
        $ketqua.="Mảng được sắp xếp:" .implode(" ",$arr)."\n";
		//cau c
		//them so vào mảng
		$a =rand(0,$n);
		array_splice( $arr, $a, 0, $x );
		$vitri= $a;
		//In ra mảng vừa thêm số
		$ketqua.="Mảng sau khi thêm $x vào vị trí $vitri: " .implode(" ",$arr)."\n";
		//themSo($a,$x,$arr,$ketqua);
		//cau d
		$arr1= array();
		for ($i=0;$i<$a;$i++){
			$arr1[$i]=$arr[$i];
		}
		echo asort($arr1);
		
		array_push($arr1,$x);
		$arr= $arr1+$arr2;
		$sapxep2= "\n Mảng sau khi sắp xếp:".implode(" ",$arr);
		$ketqua.=$sapxep2;
		//SXTangGiam($a,$x,$n,$arr,$ketqua);
    }
?>


				
<form action="" method="post">
	Nhập n: <input type="text" name="n" value="<?php echo $n?>"/>
	<input type="submit" name="hthi" value="Hiển thị"/><br>
	Kết quả: <br>
	<textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua?></textarea>	
</form>
</body>
</html>

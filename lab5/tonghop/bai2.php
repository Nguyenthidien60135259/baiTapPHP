<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class PHAN_SO
{	var $tuso, $mauso;
	function get_tuso()
	{	return $this-> tuso;
		
	}
	function set_tuso($value)
	{	$this->tuso=$value;
		
		}
	function get_mauso()
	{	return $this->mauso;
		}	
	function set_mauso($value)
	{
		$this->mauso=$value;
	}
	function khoitao_ps($p_ts, $p_ms)
	{
		$this->tuso=$p_ts;
		$this->mauso=$p_ms;
	}
	//tim USCLN cua 2 so
	function USCLN($a,$b)
	{	//neu phan so am thi doi dau cua tu so
		if($a<0) $a=(-1)*$a;
		$sonho=($a<$b)? $a :$b;
		for($i=$sonho;$i>0;$i--)
			if(($a%$i)==0 && ($b%$i)==0)
			{	//return $i;
				break;
			}
		return $i;
	
	}
	//toi gian phan so
	function toigian_ps()
	{	$uscln=$this->USCLN($this->tuso, $this->mauso);
		$this->tuso=$this->tuso/$uscln;
		$this->mauso=$this->mauso/$uscln;
		
	}
	//tinh tong hai phan so
	function tong($p_tuso,$p_mauso)
	{	$ps= new PHAN_SO();
		$ps->khoitao_ps($p_tuso,$p_mauso);
		$ps->tuso=($this->tuso*$ps->mauso)+ ($ps->tuso*$this->mauso);
		$ps->mauso= $this->mauso*$ps->mauso;
		$ps->toigian_ps();
		return $ps;		
	}
	//tinh hieu 2 phan so
	function hieu($p_tuso,$p_mauso)
	{	$ps= new PHAN_SO();
		$ps->khoitao_ps($p_tuso,$p_mauso);
		$ps->tuso=($this->tuso*$ps->mauso)- ($ps->tuso*$this->mauso);
		$ps->mauso= $this->mauso*$ps->mauso;
		//$ps->toigian_ps();
		return $ps;
	}
    //tinh tich 2 phan so
    function tich($p_tuso,$p_mauso)
	{	$ps= new PHAN_SO();
		$ps->khoitao_ps($p_tuso,$p_mauso);
		$ps->tuso=($this->tuso*$ps->tuso);
		$ps->mauso= $this->mauso*$ps->mauso;
		//$ps->toigian_ps();
		return $ps;
	}

    //tinh thuong 2 phan so
    function thuong($p_tuso,$p_mauso)
	{	$ps= new PHAN_SO();
		$ps->khoitao_ps($p_tuso,$p_mauso);
		$ps->tuso=($this->tuso*$ps->mauso);
		$ps->mauso= $this->mauso*$ps->tuso;
		//$ps->toigian_ps();
		return $ps;
	}
		
}

?>
<?php
	$tuso_1=isset($_POST['tuso_1'])?$_POST['tuso_1']:'';
	$mauso_1=isset($_POST['mauso_1'])?$_POST['mauso_1']:'';
	$tuso_2=isset($_POST['tuso_2'])?$_POST['tuso_2']:'';
	$mauso_2=isset($_POST['mauso_2'])?$_POST['mauso_2']:'';
?>

<form id="form1" name="form1" method="post" action="">
  	<p><label><strong><font color="#6600FF"> Ch???n ph??p t??nh tr??n ph??n s???</font></strong></label>&nbsp;</p>
  	<p>Nh???p ph??n s??? th??? 1: T??? s???:
    	<input name="tuso_1" type="text" id="tuso_1" size="10" maxlength="10" value="<?php echo $tuso_1?>"/> 
    	M???u s???:
    	<input name="mauso_1" type="text" id="mauso_1" size="10" maxlength="10" value="<?php echo $mauso_1?>"/>
  	</p>
  	<p>Nh???p ph??n s??? th??? 2: T??? s???: 
    	<input name="tuso_2" type="text" id="tuso_2" size="10" maxlength="10" value="<?php echo $tuso_2?>"/>
  		M???u s???: 
  		<input name="mauso_2" type="text" id="mauso_2" size="10" maxlength="10" value="<?php echo $mauso_2?>"/>
  	</p>
 	<fieldset>
    	<legend>Ch???n ph??p t??nh</legend>
    	<p>
    		<label>
        		<input type="radio" name="pheptinh" value="c???ng" 
        			<?php if(isset($_POST['pheptinh'])&&($_POST['pheptinh'])=="c???ng") echo 'checked'?>  />
        			C???ng
        	</label>
    
      		<label>
        		<input type="radio" name="pheptinh" value="tr???"  
        			<?php if(isset($_POST['pheptinh'])&&($_POST['pheptinh'])=="tr???") echo 'checked'?>/>
        		Tr???
    		</label>

            <label>
        		<input type="radio" name="pheptinh" value="nh??n"  
        			<?php if(isset($_POST['pheptinh'])&&($_POST['pheptinh'])=="nh??n") echo 'checked'?>/>
        		Nh??n
    		</label>

            <label>
        		<input type="radio" name="pheptinh" value="chia"  
        			<?php if(isset($_POST['pheptinh'])&&($_POST['pheptinh'])=="chia") echo 'checked'?>/>
        		Chia
    		</label>
    	</p>
	</fieldset>
  	<p>
    	<input name="Chon_pheptinh" type="submit" value="K???t qu???" />
  	</p>
 
</form>
<?php
	$ps_1=new PHAN_SO();
	$ps_1->set_tuso($tuso_1);
	$ps_1->set_mauso($mauso_1);
	$ps_2=new PHAN_SO();
	$ps_2->khoitao_ps($tuso_2,$mauso_2);
	$ketqua="";
	if (isset($_POST['Chon_pheptinh'])) 
	{
		$pheptinh=$_POST['pheptinh'];
		switch($pheptinh)
		{	case "c???ng": 
						$ps=new PHAN_SO();
						$ps=$ps_1->tong($ps_2->tuso,$ps_2->mauso);
						$ketqua=$ps_1->get_tuso()."/".$ps_1->get_mauso()."+".$ps_2->get_tuso()."/".$ps_2->get_mauso()."=".$ps->get_tuso()."/".$ps->get_mauso();
						break;
			case "tr???":
						$ps=new PHAN_SO();
						$ps=$ps_1->hieu($ps_2->tuso,$ps_2->mauso);
						$ketqua=$ps_1->get_tuso()."/".$ps_1->get_mauso()."-".$ps_2->get_tuso()."/".$ps_2->get_mauso()."=".$ps->get_tuso()."/".$ps->get_mauso();
						break;
            case "nh??n":
						$ps=new PHAN_SO();
						$ps=$ps_1->tich($ps_2->tuso,$ps_2->mauso);
						$ketqua=$ps_1->get_tuso()."/".$ps_1->get_mauso()."*".$ps_2->get_tuso()."/".$ps_2->get_mauso()."=".$ps->get_tuso()."/".$ps->get_mauso();
						break;
            case "chia":
						$ps=new PHAN_SO();
						$ps=$ps_1->thuong($ps_2->tuso,$ps_2->mauso);
						$ketqua=$ps_1->get_tuso()."/".$ps_1->get_mauso().":".$ps_2->get_tuso()."/".$ps_2->get_mauso()."=".$ps->get_tuso()."/".$ps->get_mauso();
						break;
								
		}
		echo "Ph??p ".$pheptinh." l????: ". $ketqua;
	}
	
?>
</body>
</html>


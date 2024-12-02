<?php 
$databaseHost = 'localhost';
$databaseName = 'dental';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$a = mysqli_real_escape_string($mysqli, $_POST['a']);
	$b = mysqli_real_escape_string($mysqli, $_POST['b']);
	$c = mysqli_real_escape_string($mysqli, $_POST['c']);
	$d = mysqli_real_escape_string($mysqli, $_POST['d']);
	$e = mysqli_real_escape_string($mysqli, $_POST['e']);
	$f = mysqli_real_escape_string($mysqli, $_POST['f']);
	$g = mysqli_real_escape_string($mysqli, $_POST['g']);
	$h = mysqli_real_escape_string($mysqli, $_POST['h']);
	$i = mysqli_real_escape_string($mysqli, $_POST['i']);
	$j = mysqli_real_escape_string($mysqli, $_POST['j']);
	$k = mysqli_real_escape_string($mysqli, $_POST['k']);
	$l = mysqli_real_escape_string($mysqli, $_POST['l']);
	$m = mysqli_real_escape_string($mysqli, $_POST['m']);
	$n = mysqli_real_escape_string($mysqli, $_POST['n']);
	$o = mysqli_real_escape_string($mysqli, $_POST['o']);
	$p = mysqli_real_escape_string($mysqli, $_POST['p']);
	$q = mysqli_real_escape_string($mysqli, $_POST['q']);
	$r = mysqli_real_escape_string($mysqli, $_POST['r']);
	$s = mysqli_real_escape_string($mysqli, $_POST['s']);
	$t = mysqli_real_escape_string($mysqli, $_POST['t']);
	$u = mysqli_real_escape_string($mysqli, $_POST['u']);
	$v = mysqli_real_escape_string($mysqli, $_POST['v']);
	$w = mysqli_real_escape_string($mysqli, $_POST['w']);
	$x = mysqli_real_escape_string($mysqli, $_POST['x']);
	$y = mysqli_real_escape_string($mysqli, $_POST['y']);
	$z = mysqli_real_escape_string($mysqli, $_POST['z']);
	$aa= mysqli_real_escape_string($mysqli, $_POST['aa']);
	$bb = mysqli_real_escape_string($mysqli, $_POST['bb']);
	$cc = mysqli_real_escape_string($mysqli, $_POST['cc']);
	$dd = mysqli_real_escape_string($mysqli, $_POST['dd']);
	$ee = mysqli_real_escape_string($mysqli, $_POST['ee']);
	$ff = mysqli_real_escape_string($mysqli, $_POST['ff']);
	$gg = mysqli_real_escape_string($mysqli, $_POST['gg']);
	$hh = mysqli_real_escape_string($mysqli, $_POST['hh']);
	$ii = mysqli_real_escape_string($mysqli, $_POST['ii']);
	$jj = mysqli_real_escape_string($mysqli, $_POST['jj']);
	$kk = mysqli_real_escape_string($mysqli, $_POST['kk']);
	$ll= mysqli_real_escape_string($mysqli, $_POST['ll']);
	$mm = mysqli_real_escape_string($mysqli, $_POST['mm']);
	$nn = mysqli_real_escape_string($mysqli, $_POST['nn']);
	$oo = mysqli_real_escape_string($mysqli, $_POST['oo']);
	$pp = mysqli_real_escape_string($mysqli, $_POST['pp']);
	$qq = mysqli_real_escape_string($mysqli, $_POST['qq']);
	$rr = mysqli_real_escape_string($mysqli, $_POST['rr']);
	$ss = mysqli_real_escape_string($mysqli, $_POST['ss']);
	$tt = mysqli_real_escape_string($mysqli, $_POST['tt']);
	$uu = mysqli_real_escape_string($mysqli, $_POST['uu']);
	$vv = mysqli_real_escape_string($mysqli, $_POST['vv']);
	$ww = mysqli_real_escape_string($mysqli, $_POST['ww']);
	$xx = mysqli_real_escape_string($mysqli, $_POST['xx']);
	$yy = mysqli_real_escape_string($mysqli, $_POST['yy']);
	$zz = mysqli_real_escape_string($mysqli, $_POST['zz']);
	
	$result1 = mysqli_query($mysqli, "UPDATE college SET a=UCASE('$a'), b=UCASE('$b'),c=UCASE('$c'), d=UCASE('$d'), e=UCASE('$e'), f=UCASE('$f'), g=UCASE('$g'), h=UCASE('$h'), i=UCASE('$i'), j=UCASE('$j'),k=UCASE('$k'), l=UCASE('$l'), m=UCASE('$m'), n=UCASE('$n'), o=UCASE('$o'), p=UCASE('$p'), q=UCASE('$q'), r=UCASE('$r'),s=UCASE('$s'), t=UCASE('$t'), u=UCASE('$u'), v=UCASE('$v'), w=UCASE('$w'), x=UCASE('$x'), y=UCASE('$y'), z=UCASE('$z'), aa=UCASE('$aa'), bb=UCASE('$bb'),cc=UCASE('$cc'), dd=UCASE('$dd'), ee=UCASE('$ee'), ff=UCASE('$ff'), gg=UCASE('$gg'), hh=UCASE('$hh'), ii=UCASE('$ii'), jj=UCASE('$jj'),kk=UCASE('$kk'), ll=UCASE('$ll'), mm=UCASE('$mm'), nn=UCASE('$nn'), oo=UCASE('$oo'), pp=UCASE('$pp'), qq=UCASE('$qq'), rr=UCASE('$rr'),ss=UCASE('$ss'), tt=UCASE('$tt'), uu=UCASE('$uu'), vv=UCASE('$vv'), ww=UCASE('$ww'), xx=UCASE('$xx'), yy=UCASE('$yy'), zz=UCASE('$zz') WHERE id=$id");
		
	header("Location: DRC.php");
	}
	if(isset($_POST['cancel'])){
	header("Location: DRC.php");
	}
	
	$id = $_GET['id'];
	
	$result1 = mysqli_query($mysqli, "SELECT * FROM college WHERE id=$id");
	
	while($res = mysqli_fetch_array($result1))
{
	$sn = $res['StudentNumber'];
	$fn = $res['FirstName'];
	$mn = $res['MiddleName'];
	$ln = $res['LastName'];
	$course = $res['Course'];
	$year = $res['Year'];
	$a = $res['a'];
	$b = $res['b'];
	$c = $res['c'];
	$d = $res['d'];
	$e = $res['e'];
	$f = $res['f'];
	$g = $res['g'];
	$h = $res['h'];
	$i = $res['i'];
	$j = $res['j'];
	$k = $res['k'];
	$l = $res['l'];
	$m = $res['m'];
	$n = $res['n'];
	$o = $res['o'];
	$p = $res['p'];
	$q = $res['q'];
	$r = $res['r'];
	$s = $res['s'];
	$t = $res['t'];
	$u = $res['u'];
	$v = $res['v'];
	$w = $res['w'];
	$x = $res['x'];
	$y = $res['y'];
	$z = $res['z'];
	$aa = $res['aa'];
	$bb = $res['bb'];
	$cc = $res['cc'];
	$dd = $res['dd'];
	$ee = $res['ee'];
	$ff = $res['ff'];
	$gg = $res['gg'];
	$hh = $res['hh'];
	$ii = $res['ii'];
	$jj = $res['jj'];
	$kk = $res['kk'];
	$ll = $res['ll'];
	$mm = $res['mm'];
	$nn = $res['nn'];
	$oo = $res['oo'];
	$pp = $res['pp'];
	$qq = $res['qq'];
	$rr = $res['rr'];
	$ss = $res['ss'];
	$tt = $res['tt'];
	$uu = $res['uu'];
	$vv = $res['vv'];
	$ww= $res['ww'];
	$xx = $res['xx'];
	$yy = $res['yy'];
	$zz = $res['zz'];
}
?>
<html>
<head>	
	<title>College (Teeth Chart)</title>
</head>
<body>
<link href="luh.css" type="text/css" rel="stylesheet"/>
<div class="content">
<form action="collegechart.php" method="post">
<div class="info">
<table>
<tr>
<th 	width: "70%">Student Number: </th>
<td><?php echo $sn;?></td>
</tr>
<tr>
<th>Name: </th>
<td><?php echo $ln .", ". $fn ." ". $ln;?></td>
</tr>
<tr>
<th>Course: </th>
<td><?php echo $course;?></td>
</tr>
<tr>
<th>Year: </th>
<td><?php echo $year;?></td>
</tr>
</table>
</div>
<div class="legend">
<img src="legends.jpg"/>
</div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="chart">
	<div class="up">
		<div class="first">
			<div class="ul1">
			<table class="ul1">
			<td>55<input type="text" id="kk" name="kk" value="<?php echo $kk;?>"></td>
			<td>54<input type="text" id="jj" name="jj" value="<?php echo $jj;?>"></td>
			<td>53<input type="text" id="ii" name="ii" value="<?php echo $ii;?>"></td>
			<td>52<input type="text" id="hh" name="hh" value="<?php echo $hh;?>"></td>
			<td>51<input type="text" id="gg" name="gg" value="<?php echo $gg;?>"></td>
			</table>
			</div>
			<div class="ul2">
			<table class="ul2">
			<td>18<input type="text" id="h" name="h" value="<?php echo $h;?>"></td>
			<td>17<input type="text" id="g" name="g" value="<?php echo $g;?>"></td>
			<td>16<input type="text" id="f" name="f" value="<?php echo $f;?>"></td>
			<td>15<input type="text" id="e" name="e" value="<?php echo $e;?>"></td>
			<td>14<input type="text" id="d" name="d" value="<?php echo $d;?>"></td>
			<td>13<input type="text" id="c" name="c" value="<?php echo $c;?>"></td>
			<td>12<input type="text" id="b" name="b" value="<?php echo $b;?>"></td>
			<td>11<input type="text" id="a" name="a" value="<?php echo $a;?>"></td>
			</table>
			</div>
		</div>
		<div class="second">
		<div class="ur1">
			<table class="ur1">
			<td>61<input type="text" id="ll" name="ll" value="<?php echo $ll;?>"></td>
			<td>62<input type="text" id="mm" name="mm" value="<?php echo $mm;?>"></td>
			<td>63<input type="text" id="nn" name="nn" value="<?php echo $nn;?>"></td>
			<td>64<input type="text" id="oo" name="oo" value="<?php echo $oo;?>"></td>
			<td>65<input type="text" id="pp" name="pp" value="<?php echo $pp;?>"></td>
			</table>
			</div>
			<div class="ur2">
			<table class="ur2">
			<td>21<input type="text" id="i" name="i" value="<?php echo $i;?>"></td>
			<td>22<input type="text" id="j" name="j" value="<?php echo $j;?>"></td>
			<td>23<input type="text" id="k" name="k" value="<?php echo $k;?>"></td>
			<td>24<input type="text" id="l" name="l" value="<?php echo $l;?>"></td>
			<td>25<input type="text" id="m" name="m" value="<?php echo $m;?>"></td>
			<td>26<input type="text" id="n" name="n" value="<?php echo $n;?>"></td>
			<td>27<input type="text" id="o" name="o" value="<?php echo $o;?>"></td>
			<td>28<input type="text" id="p" name="p" value="<?php echo $p;?>"></td>
			</table>
			</div>
		</div>
	</div>
	<div class="down">
	<div class="first">
		<div class="ll1">
			<table class="ll1">
			<td>48<input type="text" id="ff" name="ff" value="<?php echo $ff;?>"></td>
			<td>47<input type="text" id="ee" name="ee" value="<?php echo $ee;?>"></td>
			<td>46<input type="text" id="dd" name="dd" value="<?php echo $dd;?>"></td>
			<td>45<input type="text" id="cc" name="cc" value="<?php echo $cc;?>"></td>
			<td>44<input type="text" id="bb" name="bb" value="<?php echo $bb;?>"></td>
			<td>43<input type="text" id="aa" name="aa" value="<?php echo $aa;?>"></td>
			<td>42<input type="text" id="z" name="z" value="<?php echo $z;?>"></td>
			<td>41<input type="text" id="y" name="y" value="<?php echo $y;?>"></td>
			</table>
			</div>
			<div class="ll2">
			<table class="ll2">
			<td>85<input type="text" id="zz" name="zz" value="<?php echo $zz;?>"></td>
			<td>84<input type="text" id="yy" name="yy" value="<?php echo $yy;?>"></td>
			<td>83<input type="text" id="xx" name="xx" value="<?php echo $xx;?>"></td>
			<td>82<input type="text" id="ww" name="ww" value="<?php echo $ww;?>"></td>
			<td>81<input type="text" id="vv" name="vv" value="<?php echo $vv;?>"></td>
			</table>
			</div>
		</div>
		<div class="second">
		<div class="lr1">
			<table class="lr1">
			<td>31<input type="text" id="q" name="q" value="<?php echo $q;?>"></td>
			<td>32<input type="text" id="r" name="r" value="<?php echo $r;?>"></td>
			<td>33<input type="text" id="s" name="s" value="<?php echo $s;?>"></td>
			<td>34<input type="text" id="t" name="t" value="<?php echo $t;?>"></td>
			<td>35<input type="text" id="u" name="u" value="<?php echo $u;?>"></td>
			<td>36<input type="text" id="v" name="v" value="<?php echo $v;?>"></td>
			<td>37<input type="text" id="w" name="w" value="<?php echo $w;?>"></td>
			<td>38<input type="text" id="x" name="x" value="<?php echo $x;?>"></td>
			</table>
			</div>
			<div class="lr2">
			<table class="lr2">
			<td>71<input type="text" id="qq" name="qq" value="<?php echo $qq;?>"></td>
			<td>72<input type="text" id="rr" name="rr" value="<?php echo $rr;?>"></td>
			<td>73<input type="text" id="ss" name="ss" value="<?php echo $ss;?>"></td>
			<td>74<input type="text" id="tt" name="tt" value="<?php echo $tt;?>"></td>
			<td>75<input type="text" id="uu" name="uu" value="<?php echo $uu;?>"></td>
			</table>
			</div>
	</div>
	<center>
	<table>
	<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Save"></td>
				<td><input type="submit" name="cancel" value="Cancel"></td>
			</tr>
	</table>
	</center>
</form>
</div>
</body>
</html>
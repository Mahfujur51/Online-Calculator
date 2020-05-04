<!DOCTYPE html>
<html>
<head>
	<title>Advance Calculator</title>
	<style>
		body{
			
			
		}
		.btn{
			margin-right: 4px;
			margin-top: 8px;
			width:100px;
		}

		.answer{
			margin:6px;
			box-shadow: 20px;
			font: 20px;

		}
		b{
			font-size: 30px;
			color: red;
		}
		.mydiv{
			background-color: lightgrey;
			padding :10px;
			border:outset;
			border-width: 1px;
			margin:20px;
			border-radius: 10px;
		}
		.answer{
			background-color: grey;
			padding:10px; 
			border-radius: 50px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:lightblue;">
	<div class='container'>
		
		<div class="col-md-12">
			<div class="row shadow p-3 mb-5 bg-white rounded mydiv">
				<h1><b><center>ADVANCE CALCULATOR</center></b></h1>
		<form method="POST" action="">
			<center>
			<input type="text" class='form-control' name="num1" placeholder="Enter number 1"><br>
			<input type="text" class='form-control' name="num2" placeholder="Enter number 2"><br>
			<button class='btn btn-primary' type="submit" name="add">Add</button>
			<button class='btn btn-primary' type="submit" name="sub">Sub</button>
			<button class='btn btn-primary' type="submit" name="mul">Mul</button>
			<button class='btn btn-primary' type="submit" name="div">Div</button>	
			<button class='btn btn-primary' type="submit" name="mod">Mod</button>	
			<button class='btn btn-primary' type="submit" name="square-root">Sqrt()</button>	
			<button class='btn btn-primary' type="submit" name="sin">Sin()</button>	
			<button class='btn btn-primary' type="submit" name="sinh">Sinh()</button>
			<button class='btn btn-primary' type="submit" name="cos">Cos()</button>	
			<button class='btn btn-primary' type="submit" name="cosh">Cosh()</button>
			<button class='btn btn-primary' type="submit" name="tan">Tan()</button>	
			<button class='btn btn-primary' type="submit" name="tanh">Tanh()</button>
			<button class='btn btn-primary' type="submit" name="log">Log()</button>
			<button class='btn btn-primary' type="submit" name="log10">Log10()</button>
			<button class='btn btn-primary' type="submit" name="exp">Exp()</button>
			<button class='btn btn-primary' type="submit" name="pow">Pow()</button>
			<button class='btn btn-primary' type="submit" name="decbin">Decbin()</button>
			<button class='btn btn-primary' type="submit" name="dechex">Dechex()</button>
			<button class='btn btn-primary' type="submit" name="decoct">Decoct()</button>
			<button class='btn btn-primary' type="submit" name="hexdec">Hexdec()</button>
			<button class='btn btn-primary' type="submit" name="octdec">Octdec()</button>		
		</center>
		</form>
		<br>
	

	
<div class='answer'>
	<center>
<?php

 if (isset($_POST['add'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$add=$num1+$num2;
 	echo "<b>Output is :".$add."</b>";
 }else if (isset($_POST['sub'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$sub=$num1-$num2;
 	echo "<b>Output is :".$sub."</b>";

 }else if (isset($_POST['mul'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$mul=$num1*$num2;
 	echo "<b>Output is :".$mul."</b>";

 }else if (isset($_POST['div'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$div = $num1/$num2;
 	echo "<b>Output is :".$div."</b>";



 }else if(isset($_POST['mod'])){
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$mod = $num1%$num2;
 	echo "<b>Output is :".$mod."</b>";



 }elseif (isset($_POST['square-root'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=sqrt($num1);
 	$out1=sqrt($num2);
 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }
 elseif (isset($_POST['sin'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=sin($num1);
 	$out1=sin($num2);
 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['sinh'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=sinh($num1);
 	$out1=sinh($num2);
 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['cos'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=cos($num1);
 	$out1=cos($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }
 elseif (isset($_POST['cosh'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=cosh($num1);
 	$out1=cosh($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 } elseif (isset($_POST['tan'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=tan($num1);
 	$out1=tan($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['tanh'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=tanh($num1);
 	$out1=tanh($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }
 elseif (isset($_POST['log'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=log($num1);
 	$out1=log($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 } elseif (isset($_POST['log10'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=log10($num1);
 	$out1=log10($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['exp'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=exp($num1);
 	$out1=exp($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['pow'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=pow($num1);
 	$out1=pow($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['decbin'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=decbin($num1);
 	$out1=decbin($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['dechex'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=dechex($num1);
 	$out1=dechex($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['decoct'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=decoct($num1);
 	$out1=decoct($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }elseif (isset($_POST['hexdec'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=hexdec($num1);
 	$out1=hexdec($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }
	elseif (isset($_POST['octdec'])) {
 	$num1=(float)$_POST['num1'];
 	$num2=(float)$_POST['num2'];
 	$out=octdec($num1);
 	$out1=octdec($num2);

 	echo "<b>1.Output  is :".$out."</b>";
 	echo "<br><b>2.Output  is :".$out1."</b>";


 }

	
?>
</center>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
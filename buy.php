<?php


?>
<html>
<head>
<title>
</title>

  <link href="./buy1.css" rel="stylesheet">
</head>
<body>
<div id="header">
<div id="header1">
<a href="./home.php" style="text-decoration:none"><span id="tname1"><b>CarsMax</b></span></a>
<a href="./buy.php"><span id="tname3"><b>  buy </b></span></a>
<a href="./sell.php"><span id="tname4"><b>  sell  </b></span></a>
<a href="./home.html"><span id="tname5"><b>logout</b></span></a>
</div>
<div>
<div id="p1">Certified Used Cars from Trusted</div>
<div id="p2">Sellers</div>
<div>
<div id="box">
<form action="./buy1.php" method="get">
<span><input type="text" id="txt" list="txtl1" name="brand" placeholder="Brand">
<datalist id="txtl1">
<option value="NISSAN"/>
<option value="FORD"/>
<option value="TOYOTA"/>
<option value="TATA"/>
<option value="SKODA"/>
<option value="HONDA"/>
<option value="HYUNDAI"/>
<option value="VOLKSWAGEN"/>
</datalist>
</span>

<span>
<input type="text" list="txtl2" id="txt1" name="model" placeholder="Model">
<datalist id="txtl2">
<option value="SUV"/>
<option value="CUV"/>
<option value="CONVERTIBLE"/>
<option value="MICRO"/>
<option value="SEDAN"/>
<option value="VAN"/>
<option value="TRUCK"/>
<option value="MINI VAN"/>
</datalist>
</span>

<span>
<input type="text" list="txtl3" id="txt2" name="ftype"placeholder="Fuel Type">
<datalist id="txtl3">
<option value="PETROL"/>
<option value="DIESEL"/>
<option value="CNG"/>
<option value="ELECTRIC"/>
</datalist>
</span>

<span>
<input type="text" list="txtl4" id="txt3" name="city" placeholder="Transmission">
<datalist id="txtl4">
<option value="Manual"/>
<option value="AUTO"/>


</datalist>
</span>
<button id="button-9">Submit</button>
</form>
</div>
</div>
</body>
</html>
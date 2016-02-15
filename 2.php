<html>
<head>
<script type="text/javascript" src="jquery-2.2.0.min.js"></script>
<script src="slider/js/bootstrap-slider.js"></script>
<link rel="stylesheet" type="text/css" href="slider/css/slider.css">
<link href="bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
  $cnt = 0;
  for ($x = 0; $x < strlen($_GET['states'][0]); $x++) {
    if ($_GET['states'][0][$x] != $_GET['states'][1][$x]) {
	$cnt = $cnt + 1;
    }
  }
  if (sizeof($_GET['states']) != 2) {
 	header('Location: 1.php?msg="Please re-select states. You must select 2');
  }
  if ($cnt > 2) {
 	header('Location: 1.php?msg="Please re-select states. They are separated by hamming distance '.$cnt);
  }
  echo "The states chosen to have minimum energy states are : "; 
  echo $_GET['states'][0]." and ";
  echo $_GET['states'][1];
  if ($_GET['states'][0][0] != 0) {
   $te1 = ">th1";
  } else {
   $te1 = "<=th1";
  }
  if ($_GET['states'][0][1] != 0) {
   $te2 = ">th2";
  } else {
   $te2 = ">th2";
  }
?>
<br/>
<table border="true">
<tr>
<td>Equation for <?php echo $_GET['states'][0]?> :</td>
<td>W12*(<?php echo $_GET['states'][0][1];?>) + W13(<?php echo $_GET['states'][0][2];?>) &gt; th1</td>
<td>W21*(<?php echo $_GET['states'][0][0];?>) + W23(<?php echo $_GET['states'][0][2];?>) &lt;=th2</td>
<td>W31*(<?php echo $_GET['states'][0][0];?>) + W32(<?php echo $_GET['states'][0][1];?>)&gt;th3</td>
</tr>
<tr>
<td>Equation for <?php echo $_GET['states'][1]?> :</td>
<td>W12*(<?php echo $_GET['states'][1][1];?>) + W13(<?php echo $_GET['states'][1][2];?>) &lt;=th1</td>
<td>W21*(<?php echo $_GET['states'][1][0];?>) + W23(<?php echo $_GET['states'][1][2];?>)&gt;th2</td>
<td>W31*(<?php echo $_GET['states'][1][0];?>) + W13(<?php echo $_GET['states'][1][1];?>)&lt;=th3</td>
</tr>
</table><br/>
<form action="3.php">
W12=W21 : 
            <input type="text" name="w12" class="span2" id="sl1" data-slider-min="-1" data-slider-max="1" data-slider-step="0.1">
<br/>
<br/>
<br/>
W23=W32 :
            <input type="text" name="w23" class="span2" id="sl2" data-slider-min="-1" data-slider-max="1" data-slider-step="0.1">
<br/>
<br/>
<br/>
W31=W13 :
            <input type="text" name="w31" class="span2" id="sl3" data-slider-min="-1" data-slider-max="1" data-slider-step="0.1">
<br/>
<br/>
<br/>
Threshhold1 : 
            <input type="text" name="t1"class="span2" id="sl4" data-slider-min="-1" data-slider-max="1" data-slider-step="0.1">
<br/>
<br/>
<br/>
Threshhold2 :
            <input type="text" name="t2" class="span2" id="sl5" data-slider-min="-1" data-slider-max="1" data-slider-step="0.1">
<br/>
<br/>
<br/>
Threshhold3 : 
            <input type="text" name="t3" class="span2" id="sl6" data-slider-min="-1" data-slider-max="1" data-slider-step="0.1">
<br/>

<br/>
<input type="submit" value="done"/>

</form>
<script>
$("#sl1").slider()
$("#sl2").slider()
$("#sl3").slider()
$("#sl4").slider()
$("#sl5").slider()
$("#sl6").slider()
  </script>
</body>
</html>

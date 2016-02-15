<html>
<head>
<script type="text/javascript">

function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onclick=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
			alert("You can only select a maximum of "+limit+" states")
			this.checked=false
			}
		}
	}
}

</script>
  </head>
<body>
<i>
<?php
	echo $_GET['msg']."\n";
?>
</i>
  <p>Select 2 minimum energy states separated by a hamming distance of more than one from the following:</p>
  <form id="world" name="world" action="2.php">
    <input type="checkbox" name="states[]" value="000"/> 000<br />
    <input type="checkbox" name="states[]" value="001"/> 001<br />
    <input type="checkbox" name="states[]" value="010"/> 010<br />
    <input type="checkbox" name="states[]" value="011"/> 011<br />
    <input type="checkbox" name="states[]" value="100"/> 100<br />
    <input type="checkbox" name="states[]" value="101"/> 101<br />
    <input type="checkbox" name="states[]" value="110"/> 110<br />
    <input type="checkbox" name="states[]" value="111"/> 111<br />
    <input type="submit"/>
  </form>

  <script type="text/javascript">


checkboxlimit(document.forms.world.states, 2)

  </script>
</body>
</html>

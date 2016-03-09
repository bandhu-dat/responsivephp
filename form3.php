    <html>
<body>

<?php   
$x = $_POST["age1"];
$y =$_POST["age2"];
echo  $x;
//echo  $y;
?>

<p>
math.min function returns the lowest value.
</p>	
<button onclick = "means(<?php echo $x ?>,<?php echo $y ?>)"> mathoperation </button> 

<p id="demo"></p>

	<script>
function means(paramFirst, paramSecond){
	alert(paramSecond);
var first = paramFirst;
var second = paramSecond;

var i = Math.min(first,second);
//alert(i);
document.getElementById("demo").innerHTML = i;
}

	</script>


</body>
</html>
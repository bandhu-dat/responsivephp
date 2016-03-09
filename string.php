<html>
<body>
<form name="train" action="string.php" method="post">
NAME1: <input type="text" name="name1">
NAME2: <input type="text" name="name2">
NAME3: <input type="text" name="name3">
NAME4: <input type="text" name="name4">
NAME5: <input type="text" name="name5"><br>
<input type="button" onclick="myfunction()"value="button">
<p id="demo"></p>

<p id="demo1"></p>

<script>
function myfunction(){
var nm1 =  document.forms["train"]["name1"].value ;
var nm2 =  document.forms["train"]["name2"].value ;
var nm3 =  document.forms["train"]["name3"].value ;
var nm4 =  document.forms["train"]["name4"].value ;
var nm5 =  document.forms["train"]["name5"].value ;
var str1 = [nm1,nm2,nm3,nm4,nm5];
//alert("k");
str1.pop();
document.getElementById("demo").innerHTML = str1 ;
//var pos = str1.length ;
alert("k");
//document.getElementById("demo").innerHTML = pos ;
//str1.push("lemon")
//document.getElementById("demo").innerHTML = str1.toString() ;
//document.getElementById("demo").innerHTML = str1.join(" * ") ;
}
//function nextfunction(){
//alert("k");	
//var str2 = document.getElementById("demo").innerHTML ;
//document.getElementById("demo").innerHTML = str2.toString();


//}

</script>

</form>


</body>

</html>

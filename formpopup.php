<html>
<body>
<form name="test" action="formpopup.php" method="post">
NAME:<input type="text" name="name">
AGE:<input  type="text" name="age">
<input type="button" onclick="myfunction()" value="Button">
<p id="dm"></p>
<p id="demo"></p> 


<script>
function myfunction(){
alert("alert sucessfull");
//var i= "alert is ok";
//alert("alert sucessfull");
var v =document.forms["test"]["age"].value ;
var i= document.forms["test"]["name"].value
//alert("alert sucessfull");
confirm(" are you sure your age is " + v);
var x = prompt ("are you sure that your name is" + i);
if(x == "yes"){

document.getElementById("dm").innerHTML = v;
//alert("alert sucessfull");


document.getElementById("demo").innerHTML = i ;
}

}

</script>

</form>

</body>
</html>
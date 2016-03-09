<html>
<body>
<form name="test" action="formvalidation.php" method="post">
<input type="text" name="name" value="">
<input type="text" name="email" value="">
<input type="radio" name="technologies" value"php">
<input type="radio" name="technologies" value"html">
<input type="radio" name="technologies" value"python">
<textarea name="message" val=""></textarea>
<input class="submit" type="submit" name="submit" value="submit">
<?php
$name="";
$email="";
$message="";
$nameError="";
$emailError="";
$messageError="";
$successMessage ="";




?>
</form>


	</body>
</html>
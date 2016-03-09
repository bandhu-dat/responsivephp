<html>
    
    
       <script>
          
     function ValidateContactForm(){
       
      var Name = document.forms.testform.name.value;
    
     if (Name == "")
    {
        window.alert("Please enter your name.");
        Name.focus();
        return false;
    }
       
    return true;
     
 }

 
    </script>
    
    
    <?php
    if ( ! empty( $_POST ) ){
 $nm=$_POST["name"];    
        
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "palash";
   

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($nm == ""){
   
    //echo "please enter a name it is mandetory and refresh the page" ;
    
}
$sql = "SELECT  * FROM test where  name = '$nm'";
//$sql = "SELECT  * FROM test";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["name"]. " - mailid: " . $row["email"].  "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
   
    
        
    }

    
    ?>
    <body>
        <form method="post" action="dbselect1.php" name="testform" onsubmit="return ValidateContactForm()" >
            <p>NAME:<input type="text" name="name"></p>
            <p><input type="submit" value="Submit" name="search"></p>
            
            
        </form>
        
        
    </body>
    
    
    
    
</html>
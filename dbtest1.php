<html>  
    
    
<?php


if ( ! empty( $_POST ) ){
$name = $_POST["name"];
$mailid = $_POST["email"];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "palash";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "palash");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    
}


// Attempt insert query execution
$sql = "INSERT INTO test(name , email) VALUES ('$name','$mailid')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}

?>
    <body>
        
        <form name=data1" action="dbtest1.php" method="post" >
              NAME:<input type="text" name="name"><br>
            EMAILID:<input type="text" name="email"><br>
         <input class="submit" type="submit" name="submit" value="submit">   
        
        
        
    </body>

</html>




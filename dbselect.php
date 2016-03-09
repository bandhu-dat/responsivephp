
    
    
     
    
    <?php
    
//$name = $_POST["Name"];
//$mailid = $_POST["Email"];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "palash";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  * FROM test";
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
   
    ?>
    
       
    

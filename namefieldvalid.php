<html>
    
    <head>
        <script>
    function ValidateContactForm(){
{
    var name =  document.getElementById("nm").value;
   // var email = document.ContactForm.Email;
   // var phone = document.ContactForm.Telephone;
   // var nocall = document.ContactForm.DoNotCall;
   // var what = document.ContactForm.Subject;
  //  var comment = document.ContactForm.Comment;

    if (name.value == "")
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
    
    //if (email.value == "")
    //{
      //  window.alert("Please enter a valid e-mail address.");
       // email.focus();
       // return false;
    //}
    //if (email.value.indexOf("@", 0) < 0)
    //{
      //  window.alert("Please enter a valid e-mail address.");
        //email.focus();
        //return false;
    //}
    //if (email.value.indexOf(".", 0) < 0)
    //{
     //   window.alert("Please enter a valid e-mail address.");
     //   email.focus();
     //   return false;
    //}

    //if ((nocall.checked == false) && (phone.value == ""))
    //{
     //   window.alert("Please enter your telephone number.");
     //   phone.focus();
     //   return false;
    //}

    //if (what.selectedIndex < 1)
    //{
      //  alert("Please tell us how we can help you.");
      //  what.focus();
      //  return false;
    //}

    //if (comment.value == "")
    //{
      //  window.alert("Please provide a detailed description or comment.");
      //  comment.focus();
      //  return false;
    //}
    return true;
}}
        </script>
    </head>
    
    
    <?php
    if ( ! empty( $_POST ) ){
  $nm=$_POST["Name"];
        
        
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "palash";
   

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($nm == ""){
   
  //  echo "please enter a name it is mandetory and refresh the page" ;
    
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
        <form method="post" action="dbselect1.php" name="testform" onsubmit="return ValidateContactForm()">
            <p>NAME:<input type="text" name="Name" id="nm"></p>
            <p><input type="submit" value="Submit" name="search"></p>
            
            
        </form>
        
        
    </body>
    
    
    
    
</html>

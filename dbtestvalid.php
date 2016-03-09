<html>
    <head>
        <script>
    function ValidateContactForm()
{
    var name = document.ContactForm.Name;
    var email = document.ContactForm.Email;
    //var phone = document.ContactForm.Telephone;
    //var nocall = document.ContactForm.DoNotCall;
    //var what = document.ContactForm.Subject;
    //var comment = document.ContactForm.Comment;

    if (name.value == "")
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
    
    if (email.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
   // if (email.value.indexOf("@", 0) < 0)
   // {
     //   window.alert("Please enter a valid e-mail address.");
     //   email.focus();
    //    return false;
   // }
   // if (email.value.indexOf(".", 0) < 0)
  //  {
    //    window.alert("Please enter a valid e-mail address.");
  //      email.focus();
  //      return false;
   // }

 //   if ((nocall.checked == false) && (phone.value == ""))
//   {
  //      window.alert("Please enter your telephone number.");
   //     phone.focus();
     //  return false;
  //  }

  //  if (what.selectedIndex < 1)
 //   {
 //      alert("Please tell us how we can help you.");
 //      what.focus();
 //       return false;
 //   }

  //  if (comment.value == "")
   // {
  //      window.alert("Please provide a detailed description or comment.");
  //      comment.focus();
   //     return false;
   // }
    return true;
}

        </script>
    </head>
    
    
    <?php
    if ( ! empty( $_POST ) ){
$name = $_POST["Name"];
$mailid = $_POST["Email"];

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

        <form method="post" action="testvalid.php" name="ContactForm" onsubmit="return ValidateContactForm()"> >
    <p>Name: <input type="text" size="65" name="Name"></p>
    <p>E-mail Address:  <input type="text" size="65" name="Email"></p>
       <p><input type="submit" value="Submit" name="submit"><input type="reset" value="Reset" name="reset"></p>
</form>

    </body>
</html>



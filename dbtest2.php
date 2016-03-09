<html>  
    <script>
           //alert("j") ;
     function ValidateContactForm(){
        // aler("k");
     var Name = document.ContactForm.name;
    var Email = document.ContactForm.email;
     if (Name.value == "")
    {
        window.alert("Please enter your name.");
        Name.focus();
        return false;
    }
    
     if (Email.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        Email.focus();
        return false;
    }
    return true;
     
 }

 
    </script>
    <body>
        
          <form method="post" action="dbtest2.php" name="ContactForm" onsubmit="return ValidateContactForm()"> 
              NAME:<input type="text" name="name"><br>
            EMAILID:<input type="text" name="email"><br>
         <input class="submit" type="submit" name="submit" value="submit">   
        </form>
        
        
    </body>

</html>


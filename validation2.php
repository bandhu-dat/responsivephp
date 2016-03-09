<html>
    <head>
        <script>
            function validateForm() {
               // var x = document.forms["myForm"]["fname"].value;
               // var y = document.forms["myform"]["fage"].value;
                //var z = document.forms["myform"]["faddress"].value;
               // alert("k");
               // var fail = validname(x);
                //var fail1= function validage(y) ;
                //if (fail == false) {
                  //alert("Name must be filled out");  
                  //return false ;
                    
                //}
              //if (fail1 == false){
                //  alert ("yor age is inavlid");
                  //  return false ;
              //}

               // if (x == null || x == "") {
                //    alert("Name must be filled out");
                   // return false;
               // }
              //else if (y == null || y == "" || y >= "18") {
                //  alert("please enter valid age shouldn't be bellow or equal to 18");
                  //return false;

             //}

                //if (z == null || z = ""){
                 //   alert("your address is mandetory");
                  //  return false;
               // }
            }
             
             
             var x= document.ContactForm.fname ;
            if(x.value == null || x.value == ""){
                alert("Name must be filled out");
                x.focus() ;
                return false ;
            }
            
            function validname(nam){
                var d = nam ;
                
                if (d == null || d == "") {
                    //alert("Name must be filled out");
                    return false;
                }
             
             function validage(nam){
                var d = nam ;
                
                if (d == null || d == "" || d<= "18") {
                    //alert("Name must be filled out");
                    return false;
                }
             
             
            }
        </script>
    </head>
    <body>

        <form name="myForm" action="validation1.php"
              onsubmit="return validateForm()" method="post">
            Name: <input type="text" name="fname"><br>
            AGE: <input type="text" name="fage"><br>
            address: <textarea  name="faddress" row="10" col="50"></textarea><br>
            <input type="submit"  value="submit">
        </form>

    </body>
</html>

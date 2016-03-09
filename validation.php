<html>
    <head>
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["fname"].value;
                
                                if (x == null || x == "") {
                  alert("Name must be filled out");
                    return false;
                }
            
            }
        </script>
    </head>
    <body>

        <form name="myForm" action="validation1.php"
              onsubmit="return validateForm()" method="post">
            Name: <input type="text" name="fname"><br>
                  <input type="submit"  value="submit">
        </form>

    </body>
</html>
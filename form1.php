<html>
    <head>
        <script>
            function formValidation()
            {

                var uname = document.forms["registration"]["name"].value;

                var uemail = document.forms ["registration"]["mailid"].value;
        // if ( uname == null || uname == "") {
                //      alert("Name must be filled out");
                //      return false;
                //}

                if (allLetter(uname))
                {

        //if(ValidateEmail(uemail))  
        //{  

        //}  
                }
        //}  
                return false;
            }
            function allLetter(uname)
            {
                var letters = /^[A-Za-z]+$/;
                if (uname.value.match(letters))
                {
                    return true;
                }
                else
                {
                    alert('Username must have alphabet characters only');
                    uname.focus();
                    return false;
                }
            }

            function ValidateEmail(uemail)
            {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (uemail.value.match(mailformat))
                {
                    return true;
                }
                else
                {
                    alert("You have entered an invalid email address!");
                    uemail.focus();
                    return false;
                }
            }

        </script>

    </head>

    <body>
        <form name='registration' action="bandhu.php"  onSubmit ="return formValidation()" method="post" >
            NAME:	<input type="text" name="name"><BR>
            MAILID :   <input type="text" name="mailid">
            <input type="submit">

        </form>


    </body>
</html>
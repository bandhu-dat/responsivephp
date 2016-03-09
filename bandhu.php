<html>
    <body>
        <?php
        echo "hello world" . "br";
        $nam = $_POST["name"];
        $emailid = $_POST["mailid"];
        echo "welcome" . $nam . "br";
        echo "your mail id is" . $emailid;
        ?><br>
        welcome <?php
        echo $_POST["name"];
        ?><br>
        your mail id is: <?php echo $_POST["mailid"]; ?>
    </body>
</html>


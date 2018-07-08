<!DOCTYPE html>
<html>
    <head>
        <title>File Read</title>
        <style>
            #span01
            {
                font-family: Arial, Helvetica, sans-serif;
                font-size:15px;
                color:#157CCE;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <span id="span01">Enter the file name you want to read :</span><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"><input type="text" name="fileid"><input type="submit" name="submit" value="SUBMIT"></form>
        <?php
        if(!empty($_POST['fileid']))
        {
            echo "<span id='span01'>Your File Information :</span><br>";
            $myfile = fopen($_POST['fileid'].".txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize($_POST['fileid'].".txt"));
            fclose($myfile);
        }
        ?> 
    </body>
</html>
<?php

?>
<?php
/*Creating Cookies*/
setcookie("name","John watkin",time()+3600,"/","",0);
setcookie("age","36",time()+3600,"/","",0);
?>
<html>
    <head><title>Setting Cookies with PHP</title></head>
    <body>
        <?php echo "set Cookies"?>
    </body>
</html> 
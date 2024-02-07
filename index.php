<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khawar Khan MD5 Cracker</title>
</head>
<body>
    <h1>Khawar Khan MD5 Password Cracker</h1>
    <?php  
        if (isset($_GET['md5'])){ ?>
            <h3>PIN:
            <?php
            $given = $_GET['md5'];
            $flag = false;
            $totalChecks = 0;
            for($i=0;$i<10;$i++){
                for($j=0;$j<10;$j++){
                    for($k=0;$k<10;$k++){
                        for($l=0;$l<10;$l++){
                            $totalChecks++;
                            $PIN = (string)$i.(string)$j.(string)$k.(string)$l;
                            $check = hash('md5',$PIN);
                            if($check == $given){
                                $flag=true;
                                echo $PIN."<br>";
                                echo "Total Checks: $totalChecks";
                            } 
                        }
                    }
                }
            }
            if(!$flag){
                echo "Not Found";
                echo "<br>Total Checks $totalChecks";
        
            } ?>
            </h3>
        <?php }  ?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
        <input type="text" name="md5" size=40>
        <button onClick="crack()">Crack MD5</button>
    </form>
</body>
</html>
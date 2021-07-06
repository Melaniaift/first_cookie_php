<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $firstcookie="my first cookie";
        $expiry=time()+(60*60*8);
        //send a cookie that expires in 8 hours
        setcookie('FirstCokie',$firstcookie,$expiry);
        //Setcookie('FirstCookie',$firstcookie,$expiry,"/");
        //setcookie('FirstCookie',$firstcookie,$expiry,"/",".rraducanu.ro");
        $last=$_COOKIE['FirstCookie'];
        print $last;
        $visits=1;
        if(isset($_COOKIE["visits"])){
            $visits=(int)$_COOKIE["visits"];
        }
        setcookie("visits",$visits+1,time()+(60*60*24*30));
        ?><br/><?php
        echo "You have visited this page $visits time(s).";
        ?><br/><?php
        $Month=2592000+time();
        //this adds 30 days to the current time
        setcookie('Cookie1',date("F jS-g:i a"),$Month);
        if(isset($_COOKIE["Cookie1"])){
            $last=$_COOKIE["Cookie1"];
            echo "Welcome back!<br>You last visited on".$last;
        }
        else
        {
        echo"Welcome to our site!";
        }
        $past=time()-10;
        //this the time 10 seconds ago
        setcookie('AboutVisit',date("F jS-g:i a"),$past);
        ?>
    </body>
</html>

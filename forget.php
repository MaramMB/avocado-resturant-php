<html lang="en">
<head>
<meta type="keyword" content="Maram , Resturant, menu ,food , drink , online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMB Resturant</title>
            <link rel="icon" href="avoca.png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
<style>
      .btn{
                    border-radius: 10px;
                    margin-top: 20px;
                    margin-bottom: 10px;
                    width: 300px;
                    height: 40px;
                    font-size: 20px;
                    background-color:grey;
                    background:rgba(0, 0, 0, 0.7) ;
                    color: white;
                    border:1px solid #0AC404;
                    text-align: center;
                }

                .btn:hover{
                    color: #0AC404;
                    border:1px solid #0AC404;
                    box-shadow:2px 2px 6px 2px #0AC404;
                    background:rgba(0, 0, 0, 0.5) ;
                }
</style>
</head>
<body  style="background: linear-gradient(to left, #000000, #1C1B1B,hsl(150, 10%, 2%));">
<?php
        if (isset($_POST["forg"])) {

                     echo"<form action=\"forget.php\" method=\"POST\">";
                      echo "<br><br><br>  <h1 style=\"text-shadow: 3px 3px 3px #0AC404;font-family:cursive ; text-align:center;color:white;\" >If you Forget your password <br> Write your email address here please </h1>   ";
                     echo   "<center><br> <input type=\"email\" name=\"emai\" style=\"height: 35px; width: 320px; background-color: silver;border-radius: 8px;\">
            <br> 
            <input type=\"submit\" class=\"btn\" style=\"font-size: 24px;  border:2px solid #0AC404;height: 45px; width: 220px;name=\"send\"\" value=\"Send\"></center>";
         echo"   </form>";
        }
        if (isset($_POST["btn"])) {
            echo "<br><br><h1 style=\" color:white; text-align:center;\">Thank you for reaching us, we will contact you soon!</h1>";
            $from ="MMB Resturant" ;
            $em=$_POST["emai"];
            $subject = "New Passowred";
            $message = "write your new password please";
            mail($em, $subject, $message, "From: $from\n");
        } 
        ?>
    
    
</body>
</html>
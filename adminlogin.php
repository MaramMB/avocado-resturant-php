<html lang="en">
    <head>
    <title>Log in Page</title>
        <link rel="icon" href="avoc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
                .btn{
                    border-radius: 10px;
                    margin-top: 20px;
                    margin-bottom: 10px;
                    width: 250px;
                    height: 40px;
                    font-size: 20px;
                    background-color:grey;
                    background:rgba(0, 0, 0, 0.7) ;
                    color: white;
                   border:1px solid #0AC404;
                    text-align: center;
                }
                .sub{
                    border:0px solid #0AC404;
                    height: 40px;
                    width:200px;
                    font-size: 16px;
                    background-color:transparent;
                    color: white;
                    text-align: center;
                    border-radius: 10px;
                    font-weight: bold;

                }
            
                .sub:hover{
                    color: #0AC404;
                    }
                .btn:hover{
                    color: #0AC404;
                    border:1px solid #0AC404;
                    box-shadow:2px 2px 6px 2px #0AC404;
                    background:rgba(0, 0, 0, 0.5) ;
                }
                section{
                    box-shadow:2px 2px 6px 2px #0AC404;
                 background:rgba(0, 0, 0, 0.9);
                    border:1px solid #0AC404;
            width:32%;
            height:67%;
            margin-top:120px;
            padding:35px;
            border-radius: 20px;
        }

        </style>
    </head>
    <body  style="background: linear-gradient(to left, #000000, #1C1B1B,hsl(150, 10%, 2%));">
     <?php
     if (isset($_POST["login"])) {
        $con = mysqli_connect("localhost", "root", "");
        if ($con->connect_errno) {
          die("Could not connect to DB: " . mysqli_error($con));
        }
        mysqli_select_db($con, "resturant");

        if(isset($_POST['uname'])&& isset($_POST['passw']))
        {
            function valid($data)
            {
                $data=trim($data);
                $data=stripcslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
  
            $uname=valid($_POST['uname']);
            $pass=valid($_POST['passw']);
            $qu="SELECT * FROM users WHERE nameus='$uname' AND passw='$pass'";
           $resu=mysqli_query($con,$qu);
           if(mysqli_num_rows($resu)==1)
           {
            echo "You Have Successfuly logged in";
        }
        else
        {
            echo "You Have failed logged in";
            exit();

        }

        }
      } 
    ?> 

   <center>
       <section>
           <img src="log.png" alt="The Firm Logo" width="140px" height="140px" >  
           <br><br>
           <form action="check.php" method="POST">
               <div class="input-group">
                   <span class="input-group-addon"><span class="glyphicon glyphicon-user "></span></span>
                   <input type="text" name="username" class="form-control" placeholder="User Name">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock "></span></span>
                    <input type="password" name="passw" class="form-control"placeholder="Password">
                </div>
                <input type="submit" value=" Sign In  " name="login" class="btn">
            </form>
            <form action="forget.php" method="post">
                <input type="submit" value=" Forget your Password ? " name="forg" class="sub">
            </form>
        </section>
    </center>       

    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update food</title>
    <style>
.serc{
            border-radius: 4px;
                    margin-bottom:-10px;
                    width: 300px;
                    height: 40px;
                    font-size: 18px;
                    color: #f4f4f4;
                    text-align: center;
                    border:1px solid #0AC404;
                    color: #000000;
                    font-family: 'Changa', sans-serif;
                    opacity: 0.8;
                }
                .area{
        opacity: 0.8;
            border-radius: 4px;
                    margin-bottom:-10px;
                    width: 610px;
                    height:70px;
                    font-size: 18px;
                    color: #f4f4f4;
                    text-align: center;
                    border:1px solid #0AC404;
                    color: #000000;
                    font-family: 'Changa', sans-serif;
    }
    .btn{
                    border-radius: 10px;
                    margin-bottom: 0px;
                    margin-left:34px;
                    margin-top:15px;
                    width: 200px;
                    height: 40px;
                    font-size: 20px;
                    background:rgba(0, 0, 0, 0.7) ;
                    color: white;
                    border:1px solid #0AC404;
                    text-align: center;
                    
                }

                .btn:hover{
                    color:green ;
                    border:1px solid #0AC404;
                    box-shadow:2px 2px 6px 2px #0AC404;
                    background:rgba(0, 0, 0, 0.5) ;
                }
                body{
                background-image:url(avocado.jpg);
                }
                section{
                    background:rgb(0,0,0,0.85);
                    height: 639px;
                    width:96.1%;
                    padding-left:420px;
                    padding:40px;
                   padding-top:80px;
                   margin:-10px;
                }


    </style>
</head>

<body >
    
    <?php
          if(!isset($_GET['id']))
          die("NO id Provided, Please Go Back!");
          $con = mysqli_connect("localhost", "root", "", "resturant");
          if ($con->connect_errno) {
              die("Could not connect to DB: " . mysqli_error($con));
            }
            mysqli_select_db($con, "resturant");
            $id=trim($_GET['id']);
            $query = "SELECT * FROM food WHERE id='$id'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            if(!isset($row)){
                die('The id provided is invalid!');
            }          
            
            ?>
            <section>
                <br><br>
                <h1 style="color:#0AC404;font-family: 'Lobster', cursive;font-size:35px;" align="center">Update Details of the meal</h1>
               
                <form action="update.php" method="POST" class="add-form" align="center">
            <p>
                <!-- <label>id</label> -->
                <input type="text" name="id_" required value="<?php echo $id; ?>" disabled class="serc"/>
                <input type="text" name="id" value="<?php echo $id; ?>" hidden/>
                <!-- <label>name</label> -->
                <input type="text" name="namee"  value="<?php echo $row['namee']; ?>"  class="serc" required/>
            </p>
         
            <p>
                <input type="number" name="price" value="<?php echo $row['price']; ?>"  required class="serc"/>
                <input type="text" name="typee" value="<?php echo $row['typee']; ?>"  required class="serc"/>
            </p>
            <p>
                <input type="text" name="image" value="<?php echo $row['image']; ?>"  required class="area" style="height:40px;"/>
            </p>
            <p>
                <input type="text" name="note" value="<?php echo $row['note']; ?>"  required class="area"/>
                </p>
           
            <p>
                <input type="submit" name="submit" value="Update food"  class="btn"/>
                <a href="admin.php"><input type="button" value="Cancel" class="btn" /></a>
            </p>
        </form>
</section>

</body>

</html>
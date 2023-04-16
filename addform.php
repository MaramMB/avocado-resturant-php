<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Meal</title>
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
                    margin-left:5px;
                    margin-top:15px;
                    width: 180px;
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
                /* background-repeat: no-repeat; */
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

<body  >
<section>
    <br><br>
        <h1 style="color:#0AC404;font-size:35px" align="center">Add a new Meal to the Menu</h1>
        <form action="add.php" method="POST" class="add-form" align="center" enctype="multipart/form-data">
            <p>
                <input type="number" name="id"  class="serc"  placeholder="id" required/>
                <input type="text" name="namee"  class="serc"  placeholder="Name" required/>
      </p>
      
      <p>
          <input type="number" name="price"  class="serc"  placeholder="Price" required/>
          <input type="text" name="typee"  class="serc"  placeholder="Type" required/>
        </p>
        <p>
            <input type="text" name="image"  class="area" style="height:40px;" placeholder="Image Path" value="<?php #if($_SERVER["REQUEST_METHOD"]=="POST") {   if(isset($_POST['pict'])) echo "pic/".$_FILES["pict"]['name'];}?>" required/>
          <!-- <input type="file"  name="pict" accept="image/png" class="serc"   required/> -->
        </p>
        
        <p>
            <textarea type="text" name="note" class="area" name="" id="" cols="30" rows="10"  placeholder="Describe Project" required></textarea>   
        </p>
        <p>
            <input type="submit" name="submit" value="Add to the Menu" class="btn"/>
            <input type="reset" value="Clear All" class="btn" />
            <a href="admin.php"><input type="button" value="Cancel" class="btn" /></a>

        </p>
        
    </form>
</section>
</body>

</html>
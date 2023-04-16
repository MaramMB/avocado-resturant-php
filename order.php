<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Changa&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
         .topnav {
  background-color: rgb(0,0,0,0.3);
  overflow: hidden;
  padding:3px 570px;
  text-decoration:none;
  margin:25px;
  height: 75px;
  align-content:center;
  /* margin-top:-4px; */
}
.im{
    position: relative;
    left: 21px;
    border:1px solid #0AC404;
    height:460px;
    width:500px;
    border-radius:20px;
    clip-path: polygon(50% 0%, 80% 10%, 96% 34%, 96% 65%, 80% 90%, 50% 100%, 20% 90%, 3% 69%, 3% 36%, 20% 10%);

    top:-20px;
   /* margin: 120px; */

}
.asr{
        display: flex;
        flex-wrap: wrap;
        width:92%;
        bottom: 50px;
    } 
    .sug{
       top:50px;
        height: 150px;
            width: 150px;
            color:  #f4f4f4;
            margin: 10px 5px 0 5px;
            position: relative;
            background: rgb(255,255,255,0.09);
            border-radius: 10px;
            transition: all 0.75s;
            opacity:0.9 ;
    }

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
                    width: 605px;
                    height:50px;
                    font-size: 18px;
                    color: #f4f4f4;
                    text-align: center;
                    border:1px solid #0AC404;
                    color: #000000;
                    font-family: 'Changa', sans-serif;
    }
    .meal{
              height: 190px;
                    width: 200px;
                    position: absolute;
                    left: 15px;
                    border-radius: 10px;
                    transition: all 1s;
                    top: 20px;

    }
    .btn{
                    border-radius: 10px;
                    margin-bottom: 0px;
                    margin-left:80px;
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
                    /* background:rgb(0,0,0,0.85); */
                    height: 639px;
                    width:92%;
                    padding-left:420px;
                    padding:40px;
                   padding-top:80px;
                   /* padding-bottom:80px; */
                   margin:-10px;
                   /* bottom:49px; */
                }
                .xyz{
        position:absolute;
        bottom: 15px;
        width:200px;
        margin-left:-25px;
        font-family: 'Lalezar', cursive;
        font-size:20px;
        
    }
    span{
            font-size:23px;
            font-family: 'Changa', sans-serif;     
        } 
        body{
            height:170%;
        }
        .tab{
            height:460px;
        }
               

    </style>

</head>
<body style="background: linear-gradient(to left, #000000, #1C1B1B,hsl(150, 10%, 2%));">
<div class="topnav" id="home">
    <br>
<span class="logo" style="float:left; color:#0AC404;font-family: 'Lobster', cursive; font-size: 35px;" ><i class="fas fa-utensils"></i>&nbsp; Avocado Resturant</span>
<br>
</div>
<div class="wrapper">
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


<form action="#" method="POST" class="add-form">
<br>
<table width="90%" align="right">
    <tr>
        <td>
        <img src="<?php echo $row['image']; ?>" alt=""  class="im">
    </td>
        <td>
            
       
<section  class="tab">               
                <form action="#" method="POST" class="add-form" align="center">
            <p>
                <!-- <label>id</label> -->
                <!-- <input type="text" name="id_" required value="<!?php echo $id; ?>" disabled class="serc"/> -->
                <input type="text" name="id" value="<?php echo $id; ?>" hidden/>
                <!-- <label>name</label> -->
                <input type="text" name="price" value="<?php echo $row['price']." $"; ?>"  required class="serc"/>
                <input type="text" name="namee"  value="<?php echo $row['namee']; ?>"  class="serc" required/>
            </p>
         
            <p>
                <input type="number" name="price" placeholder="Your Quantity" required class="serc"/>
                <input type="text" name="typee" value="<?php echo $row['typee']; ?>"  required class="serc"/>
            </p>
            <p>
                <input type="text" name="note" value="<?php echo $row['note']; ?>"  required class="area"/>
            </p>
            <p>
                <input type="text" name="image" placeholder="💅 اكتب الي ببالك بس ما توخذ راحتك لان مش هنعبرو"  required class="area" style="height:120px;"/>
                </p>
           
            <p>
                <input type="submit" name="submit" value="Order Food"  class="btn"/>
                <a href="user.php"><input type="button" value="Cancel" class="btn" /></a>
            </p>
        </form>
</section>
        </form>
        </td>
    </tr>
</table>    
    <?php
    $ty=$row['typee'];
    $quey="SELECT * FROM food WHERE typee='$ty'";    
    $q2 = mysqli_query($con, $quey);
    $row = mysqli_fetch_array($q2); 
    ?>
  <span style="float:right; color:#0AC404;font-family: 'Changa', sans-serif;   font-size: 40px;" >عناصر مشابهة   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<br><br>
    <center>

        <div class="asr">
            <?php
    if(mysqli_num_rows($q2)>0)
    {
        foreach($q2 as $row){
            ?>
             <section class="sug">                       
                 <img src="<?php echo $row['image'];?>" alt="" class="meal">
                 <div class="xyz">
                     <Span ><?php echo $row['price'];?>$ </span>&nbsp;
                     <span >&nbsp;<?php echo $row['namee'];?></span>
                    </div>   
  
                </section >
                <?php
    }
    
}  

?>
<br>
</div>
</center>

    <br>
</body>
</html>
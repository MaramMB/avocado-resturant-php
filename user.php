<html lang="en">
<head>
    <meta type="keyword" content="Maram , Resturant, menu ,food , drink , online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMB Resturant</title>
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=Lalezar&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="icon" href="avoca.png">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script defer src="all.js"></script>        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Changa&family=Lalezar&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
<style>
    ::-webkit-scrollbar {
    width: 15px;
    background:#111412;
   }
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(500deg,  #0AC404,#1C1F1D);
        border-radius: 0.3rem;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(500deg,  #0AC404,#6F7571);
      }
      .btn{
                    border-radius: 10px;
                    margin-bottom: 0px;
                    margin-left:15px;
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

                img{
                    height: 223px;
                    width: 240px;
                    position: absolute;
                    left: 17px;
                    border-radius: 10px;
                    transition: all 1s;
                    top: 20px;
                    
                }
                section:hover img{
                    top: -25px;
                    transform:scale(1.05);

        }

                section{
            height: 345px;
            width: 271px;
            color:  #f4f4f4;
            margin: 20px 0 0 8px;
            position: relative;
            background: rgb(255,255,255,0.09);
            border-radius: 10px;
            transition: all 0.75s;
            opacity:0.9 ;
            
        }
        section:hover{
            height: 335px;
            box-shadow: 1px 1px 15px rgb(255, 255, 255,0.8);
        }
        span{
            font-size:23px;
            font-family: 'Changa', sans-serif;
        
        
        } 
            .asr{
        display: flex;
        flex-wrap: wrap;
        width:90%;
    } 
    .secn,.xyz{
        position:absolute;
        bottom: 58px;
        width:240px;
        font-family: 'Lalezar', cursive;
        padding-left:15px;
        transition: all 0.2s;
        margin-right:50px;
        font-size:20px;
        
    }
    .secn{
        bottom: 45px;
        opacity: 0;
    }
    
    .sec{
        position:absolute;
        margin-left:20px;       
            bottom: 15px;
            opacity: 1;
            transition: all 1s;
            font-size:20px;
        }
        section:hover .secn {
            opacity: 1;
        }
        section:hover .xyz {
            opacity: 0;
        }
        .serbar{
            /* width:800px; */
  padding: 6px 10px;
  margin-top: -35px;
  margin-right: 16px;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.serbar .serc,.serbar .btn{
            margin-right: -12px;
            width:190px;
            border-radius: 10px;
                    margin-bottom: 0px;
                    margin-left:15px;
                    margin-top:15px;
                    width: 200px;
                    height: 35px;
                    font-size: 19px;
                    color: #f4f4f4;
                    text-align: center;
                    
                    
                }
                .serbar .serc{
                    border:1px solid #0AC404;
                    color: #0AC404;
                    font-family: 'Changa', sans-serif;
            
            
            
        }
        #myBtn {
            height: 50px;
            width: 45px;
            line-height: 45px;
            text-align: center;
            display: none; 
            position: fixed; 
            bottom: 15px; 
            right: 30px; 
            z-index: 9999; 
            border: none; 
            outline: none; 
            background-color: green; 
            color: #fff; 
            cursor: pointer; 
            padding: 10px;
            border-radius: 10px; 
            font-size: 30px;
        }
        #myBtn:hover {
        background-color: rgba(102, 102, 102, 0.685);
            border:2px solid rgb(102, 241, 106);
            color:#0AC404 ;
                 }

        .serc:hover{
                    color: #0AC404;
                    background:rgba(0, 0, 0, 0.5) ;
                }
                .noth{
                    color:white ;
                    padding-left:360px;
                    font-size:40px;


                }

                
         
</style>

</head>
<body style="background: linear-gradient(to left, #000000, #1C1B1B,hsl(150, 10%, 2%));">
<br>
<div class="scroll-up-btn" >
            <button onclick="topFunction()" id="myBtn" title="Go to top"class="scroll-up-btn"><i class="fas fa-angle-up"></i></button>
            <script>
                mybutton = document.getElementById("myBtn");
                window.onscroll = function(){
                    if (document.body.scrollTop > 10 ) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                      }
                      }
                      function topFunction() {
                      document.body.scrollTop = 0; 
                    }
                    </script>
    </div>
<h1 style="font-family: cursive; font-size: 40px; color: #F4F4F4 ;text-align:center; ">Welcome To our Resturant </h1>

<?php
    $con=mysqli_connect("localhost","root","","resturant");
    $query="SELECT * FROM food";
    if(isset($_GET['drink']))
    {
        $query="SELECT * FROM food WHERE typee='drink'";       
    }
    if(isset($_GET['Sandwiches']))
    {
        $query="SELECT * FROM food WHERE typee='sandw'";       
    }
    if(isset($_GET['Appetizer']))
    {
        $query="SELECT * FROM food WHERE typee='app'";       
    }
    if(isset($_GET['Mean']))
    {
        $query="SELECT * FROM food WHERE typee='mean'";       
    }
    if (isset($_GET["submit"]))
    {
        $str=$_GET["serch"];
        $query="SELECT * FROM food WHERE namee='$str'";    
    } 
    if (isset($_GET["prsubmit"]))
    {
        $price=$_GET["prserch"];
        $query="SELECT * FROM food WHERE price>='$price'";       

    }
    $q2=mysqli_query($con,$query);
?>
<center>
    <form action="#" method="GET">
        <div class="serbar">
        <span style="color:green;font-size:18px;">فطــــــــــــــورك المميـــــــــــز بـــــــــس مــــــــــن عنــــــدنا</span>
        <br><br>
        <input type="number" name="prserch"  class="serc" placeholder="Serch price" style="width:250px" >
        <button type="submit" name="prsubmit" class="serc" style="width:50px"><i class="fa fa-search"></i></button>
        <input type="text" name="serch"  class="serc" placeholder="Serch name" style="width:250px" >
        <button type="submit" name="submit" class="serc" style="width:50px"><i class="fa fa-search"></i></button>
        <br>
        <input type="submit" class="btn" name="drink" value="Drinks">
        <input type="submit" class="btn" name="Sandwiches" value="Sandwiches">
        <input type="submit" class="btn" name="Appetizer" value="Appetizer">
        <input type="submit" class="btn" name="Mean" value="Mean">
</div>
    </form>
    <div class="asr">
        <?php
            if(mysqli_num_rows($q2)>0)
            {
                foreach($q2 as $row){
                    ?>
                    <section>
                        
                        <img src="<?php echo $row['image'];?>" alt="">
                            <div class="xyz">
                                <Span ><?php echo $row['price'];?>$ </span>&nbsp;
                                <span >&nbsp;<?php echo $row['namee'];?></span>
                            </div>  
                            <div class="secn">
                                <p ><?php echo $row['note'];?></p>                                                 
                            </div>  
                      
                        <div class="sec">
                        <a href="<?php echo "./order.php?id=" . $row['id']?>"><button class="btn" >Order Now </button></a>
                    </div>  
                    </section >
                    <?php
            }
            
        }
        else
        echo "<span class=\"noth\">ما لقيت غير هالوجبة اطلب فلافل</span>";
        
        ?>
        </section>
        </center>

<?php

mysqli_close($con);
?>


<br><br>

</body>
</html>
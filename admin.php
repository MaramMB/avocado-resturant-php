<?php
session_start();
if(isset($_SESSION['user']))
{

    echo "You are Permitted To See This Page";
}
else
{
    echo "You are Not Permitted To See This Page";
}
?>
<html lang="en">
<head>
    <meta type="keyword" content="Maram , Resturant, menu ,food , drink , online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMB Resturant</title>
    <script>
    function deleteBook(id) {       
      var res=confirm("Are you sure you want to delete this book");
      if(res){
        window.location="delet.php?id=" + id;
      }
    }
  </script>
            <link rel="icon" href="avoca.png">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa&family=Lalezar&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                    width: 250px;
                    position: absolute;
                    left: 21px;
                    border-radius: 10px;
                    transition: all 1s;
                    top: 20px;
                    
                }
                section:hover img{
                    top: -35px;
                    transform:scale(1.05);

        }

                section{
            height: 345px;
            width: 290px;
            color:  #f4f4f4;
            margin: 20px auto 0 auto;
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
        width:79%;
    } 
    .secn,.xyz{
        position:absolute;
        bottom: 58px;
        width:260px;
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
        margin-left:30px;       
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
        .serc:hover{
                    color: #0AC404;
                    background:rgba(0, 0, 0, 0.5) ;
                }
                .noth{
                    color:white ;
                    padding-left:360px;
                    font-size:40px;


                }
                .sec .btn {
                position:flex;
                margin-left:10px;     
                margin-right:25px;    
                height:35px; 
                    opacity: 1;
                    transition: all 1s;
                    font-size:18px;
                }

                
         
</style>

</head>
<body style="background: linear-gradient(to left, #000000, #1C1B1B,hsl(150, 10%, 2%));">
<br>
<h1 style="font-family: cursive; font-size: 40px; color: #F4F4F4 ;text-align:center; ">Welcome To our Resturant </h1>

<?php
    $con=mysqli_connect("localhost","root","","resturant");
    $query="SELECT * FROM food";
    if(isset($_GET['login']))
    {
        $query="SELECT * FROM food";       
    }
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
        <!-- <a href="addform.php">  <input type="submit" class="btn" name="add" value="Add a Meal"></a> -->
        
    </form>
    <form action="addform.php" method="post">
        <input type="submit" class="btn" name="add" value="Add a Meal">
    </form>
        <!-- <input type="submit" class="btn" name="drink" value="Drinks">
        <input type="submit" class="btn" name="Sandwiches" value="Sandwiches">
        <input type="submit" class="btn" name="Appetizer" value="Appetizer">
        <input type="submit" class="btn" name="Mean" value="Mean"> -->
</div>
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
                        <a href="<?php echo "./updateform.php?id=" . $row['id']?>"><button class="btn" style=" width:85px;">Edit</button></a>
                        <?php echo " <span onclick='deleteBook(" . $row['id']  . ")'><button class=\"btn\" style=\" width:85px;\">Delete </button></span>"; ?>
                    </div>  
                    </section >
                    <?php
            }
            
        }
        else
        echo "<span class=\"noth\">ما لقيت غير هالوجبة اطلب فلافل</span>";
       
        mysqli_close($con);
      
        
        ?>
        </section>
    </center>
</body>
</html>
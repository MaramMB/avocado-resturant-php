<?php
$mainc='#0AC404';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $mainc=$_POST['color'];
    setcookie('pcolor',$mainc,time()+300,"/");
}
if(isset($_COOKIE['pcolor']))
{
    $tcolor=$mainc;
}
else{
    $tcolor=$_COOKIE['pcolor'];
}
?>
<html lang="en">
<head>
    <meta type="keyword" content="Maram , Resturant, menu ,food , drink , online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMB Resturant</title>
            <link rel="icon" href="avoca.png">
            <link href="https://fonts.googleapis.com/css2?family=Changa&family=Lalezar&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
          <style>
::-webkit-scrollbar {
    width: 15px;
    background:#111412;
   }
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(500deg,  <?php echo $tcolor;?>,#1C1F1D);
        border-radius: 0.3rem;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(500deg,  <?php echo $tcolor;?>,#6F7571);
      }


         .mmb{
         text-align: right;
         color:white; 
         width:200px;
         height: 55px;
         padding: 10px;
         font-size: 25px ;
         background: black;
         border: 1.5px solid <?php echo $tcolor;?>;
         border-radius: 15px;
         font-weight: bold;
         opacity: 0.9;
        text-align:center;
        font-family: 'Lobster', cursive;
         
        }
        .mmb:hover{
            color:  <?php echo $tcolor;?>; 
            box-shadow:3px 1px 15px 4px  <?php echo $tcolor;?>;
            background-color:black;
        }
        .act .cont .left{
width: calc(70% - 30px);
width: 70%;
margin-left: 40px;
display: flex;
color:white;
}
.act .cont .left .text {
font-size: 22px;
font-weight: 400px;
margin-bottom: 10px;
}
.act .cont .left .text p{
text-align: justify;
font-size: 18px;
font-weight: 100;
margin-right: 150px;

}
.act .cont .left .icon{
margin: 10px 0;
}
.act .cont .row {
display: flex;
height: 65px;
align-items: center;
margin-bottom: 10px;
}
.act .cont .row .info{
margin-left: 30px;
}
.act .cont .row .fa-user,.fa-map-marker-alt ,.fa-envelope {
font-size: 25px;
color: <?php echo $tcolor;?>;
}
.act .cont .info .head{
font-weight: 500;
}
.act .cont .info .sub{
color: #6F7571;
}
.act .cont .left{
display: flex;
align-items: center;
justify-content:space-between;
position: relative;

}
.cont .right form .fields{
display: flex;
}
.cont .right form .field{

height: 40px;
width: 200%;
margin-bottom: 10px;
}
form .name{
margin-right: 10px;

}
.right form textarea{
height: 80px;
resize: none;
}
.cont .right form .fields 
{
height: 40px;
width: 200%;
margin-bottom: 10px;
}
.cont .right form .field input, textarea{
    height: 100%;
    width: 100%;
    border: 1px solid lightgrey;
    border-radius: 6px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family: 'Poppins', sans-serif;
}


.act .cont button{
                    background:rgba(0, 0, 0, 0.7) ;
                
                    border:1px solid <?php echo $tcolor;?>;
                    text-align: center;
height: 35px;
width: 180px;
margin-top: 300px;
margin-left: -200px;
color: #fff;
font-size: 18px;
border-radius: 10px;
font-weight: 300px; 
cursor: pointer;
transition: all 0.3s ease;
} 
.act .cont button:hover{
    color:<?php echo $tcolor;?> ;
                    border:1px solid <?php echo $tcolor;?>;
                    box-shadow:2px 2px 6px 2px <?php echo $tcolor;?>;
                    background:rgba(0, 0, 0, 0.5) ;

}
form .field:hover{
border-radius: 7px;
border:2px solid <?php echo $tcolor;?>;
}
        section{
           
            margin-top:-15px;
            padding:20px;
            border-radius: 20px;
            
        }
        img{
            width:320px;
            margin-top:70px;
            
        }
        .topnav {
  background-color: rgb(0,0,0,0.3);
  overflow: hidden;
  padding:1px 30px;
  /* margin-top:-4px; */
}
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 22px;
  font-weight:bold;
}
.cont .left{
display: flex;
align-items: center;
justify-content:space-between;
position: relative;

}
.cout .left .text p{
text-align: justify;
font-size: 19px;
font-weight: 100;
margin-bottom: 120px;
color:white;
}
.cout .left .text {
font-size: 20px;
font-weight: 600;
margin-top: 20px;
}
.cout .righ .bars{
margin-bottom: 15px;
width: 450px;

}

.cont .left .text {
font-size: 20px;
font-weight: 400;
margin-bottom: 10px;
}
.left img{
    /* clip-path : circle(50% at 50% 50%); */
    height: 350px;
    width: 350px;
    margin-left: 100px;
    object-fit: cover;
    border-radius: 200px;
    box-shadow:2px 2px 10px rgb(42, 1, 56)

}

.topnav a:hover {
  color: <?php echo $tcolor;?>;
}
.icon{
    text-decoration: none;
    margin-right: 10px;
    color: orange;
}

.cont .right form .field{
    display: flex;

height: 40px;
width: 200%;
margin-bottom: 10px;
}
form .name{
margin-right: 10px;

}
.social{
        text-align:center;
        padding-left:100px;
        align-items: right;
        height: 8%;  
        display: flex;
        flex-wrap: wrap;
        padding-top: 30px;
    }
       .Social .so{
            text-align: center;
            font-size: 30px;
            padding:12px 12px 12px 12px;
            border-radius: 20px;   
            margin-top: 10px; 
            margin-right: 7px;
            transition: all 1s ; 
            width: 40px;
            border: 2px solid <?php echo $tcolor;?>;
            transform:all 0.5s ease;
            position: relative;
            color:<?php echo $tcolor;?>;
        }
        .Social a:hover {
            animation: move 4s ;
            box-shadow: 2px 2px 15px rgb(72, 5, 75); 
            background: #000000;
            color: #fff;
            
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
            background-color: <?php echo $tcolor;?>; 
            color: #fff; 
            cursor: pointer; 
            padding: 10px;
            border-radius: 10px; 
            font-size: 30px;
        }
        #myBtn:hover {
        background-color: rgba(102, 102, 102, 0.685);
            border:2px solid <?php echo $tcolor;?>;
            color:<?php echo $tcolor;?> ;
                 }
        .lab{
        display: flex;
        flex-wrap: wrap;
        margin-left: 80px;
        justify-content:space-between;
        position: relative;
        width:50%;
        padding-right: 200px;
    }
    .media{
        width:90%;
        padding: auto;
        margin-left:40px;
        padding-bottom: 15px;
    }
    .tittle{
    font-family: 'Ubuntu', sans-serif;
    text-align: center;
    color:white;
    font-weight: 500;
    padding-top: 30px;
    margin-bottom: 40px;
    padding-bottom: 20px;
    font-size: 40px;
    position: relative;
    
}
 .col{
    width:7px;
    margin-left:-20px;
    margin-right:-27px;
    padding-bottom:827px;
    height:15px;   
 }
 .col input{
    height:27px; 
 
 }
        @keyframes move{
            0%{
                transform: translate(10%,-10%) rotate(-30deg);
            }
            25%{
                transform: translate(10%,10%) rotate(60deg);
            }
            50%{
                transform: translate(-10%,10%) rotate(-60deg);
            }
            75%{
                transform: translate(10%,10%) rotate(30deg);
            }           
            100%{
                transform: translate(0,0) rotate(0);
            }          
        }

          </style>
</head>
<body style="background: linear-gradient(to left, #000000, #1C1B1B,hsl(150, 10%, 2%));">
<div class="scroll-up-btn" >
            <button onclick="topFunction()" id="myBtn" title="Go to top"class="scroll-up-btn"><i class="fas fa-angle-up"></i></button>
            <script>
                mybutton = document.getElementById("myBtn");
                window.onscroll = function(){
                    if (document.body.scrollTop > 30 ) {
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
<div class="topnav" id="home">
<a href="#" class="logo" style="float:left; color:<?php echo $tcolor;?>;font-family: 'Lobster', cursive; font-size: 32px;" ><i class="fas fa-utensils"></i>&nbsp; Avocado Resturant</a>
   <form action="#" method="POST">        
       <a href=""><input type="color" name="color" id=""></a>
       <a href="" class="col"><input type="submit" name="choose" id="" value="" ></a>      
       <a href="#act">Contact</a>
       <a href="#about">About</a>
       <a  href="#home">Home</a>
    </form>
</div>
         
            <center>
                <img src="avocfam.png" alt="" >
                <section >                   
                    <!--h3 style="font-family: 'Lobster', cursive; font-size: 50px; color: <?php echo $tcolor;?>; text-shadow: 1px 1px 2px #ffffff;">MMB Avocado Resturant</h3-->
                    <h3 style="font-family: cursive; font-size: 38px; color: #FAFFF3;">“ There is no love sincerer than the love of food...</h3>
                    <h3 style="font-family:  cursive; font-size: 34px; color: #FAFFF3;">So take it easy and order your food ya azizi ”</h3>
                    <!--h3 style="font-family: 'Aladin', cursive; font-size: 35px; color: rgb(236, 196, 248);">Log in to the menu like a </h3-->
                    <br>  
                    <a  href="adminlogin.php" ><button class="mmb">Admin</button></a>
                    &nbsp; <a href="user.php"  ><button class="mmb">User</button></a>
                </section>
             </center>
             <br><br>  <br> 
            <center>
                <section id="about">  
                    <label style="font-family: cursive; font-size: 55px; color: <?php echo $tcolor;?>;text-align:left;font-weight:bold;">About Us</label>      
                    <p style="font-family: 'Changa', sans-serif; font-size: 23px; color: #f4f4f4;width:780px;">افوكادو هو الموقع الالكتروني المفضل للاكيلة لوجبات الافطار في فلسطين و كمان اسهل و أبسط و اوفر طريقة تطلب أكلك من بين مطاعم فلسطين طبعا لأنو الموقع مش جاهز 😌. 
            ا<br>تشمل مطاعم نابلس, مطاعم رام الله, مطاعم بيت لحم, مطاعم جنين, مطاعم طولكرم و غيرها من المدن
                      أهم اسباب تخليك تطلب من عندنا رح ترتاح من مكالمات التليفون مع المطاعم و أطلب و وبالك رايق, تشوف منيو المطعم اللي بتحبه في أي وقت و أي مكان, كل يوم في عروض وخصومات على الأكل. (هاي للدعاية بنخصمش اشي ) </p>           
                        <p style="font-family: cursive; font-size: 35px; color: <?php echo $tcolor;?>;">“ There is no love sincerer than the love of food..."<br>
                        <span style="font-family: 'Changa', sans-serif; font-size: 25px; color: #f4f4f4;width:780px;">خدمة متميزة نعمل 25 ساعة باليوم لأجلكم</span></p>
                 
                </section>
             </center>
             <section class="act" id="act">
            <div class="max">
                <div>
                    <table class="media" >
                        <tr>
                            <td>
                                <div class="lab">
                                    <div class="labl">
                                        <h2 class="tittle">Contact me </h2> 
                                        <h4 class="t" style="text-align: center;margin-top: -50px; color: <?php echo $tcolor;?>; font-size: 18px;font-family:'Ubuntu', sans-serif ;"><i class="fas fa-ellipsis-h" style="color: #111;"></i> Get in touch <i class="fas fa-ellipsis-h"style="color: #111;"></i></i></h4> 
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="Social">
                                    <a href="https://www.facebook.com/maram.ana.5623" title="Facebook" target="_blank" class="so"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://instagram.com/maramalbadareen?igshid=jrzt18q5s3bt" title="instagram"target="_blank"  class="so"><i class="fab fa-instagram"></i></a>
                                    <a href="https://t.me/marammb_2001" target="_blank" title="Telegram" class="so"><i class="fab fa-telegram-plane" ></i></a>
                                    <a href="https://myaccount.google.com/" target="_blank" title="Gmail" class="so"><i class="fab fa-google-plus-g" ></i></a>
                                    <a href="https://web.whatsapp.com/" title="whatsapp" target="_blank" class="so"><i class="fab fa-whatsapp"></i></a>                          
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

              <div class="cont">
                    <div class="left">               
                        <div class="text">Get In Touch</h2>
                            <p > Lorem ipsum adipisicing elit. Veritatis ex illo eius fugiat, nisi ea praesentium cum aut consequuntur quas quisquam exercitationem nihil?</p>
                            <div class="icos">
                                <div class="row">
                                    <i class="fas fa-user"></i>
                                    <div class="info">
                                        <div class="head">Name</div>
                                        <div class="sub">Maram Al-Badareen</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="info">
                                        <div class="head">Address</div>
                                        <div class="sub">Palestine, Hebron</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <i class="fas fa-envelope"></i>
                                    <div class="info">
                                        <div class="head">Email</div>
                                        <div class="sub">albadareenmaram@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="text">Message me</div>
                           <form action="">
                               <div class="fields">
                                   <div class="field name">
                                       <input type="text" name="" id="" placeholder="Name" required>
                                   </div>
                                    <div class="field email">
                                    <input type="email" name="" id="" placeholder="Email"  required>
                                    </div>
                                </div>
                                <div class="field">
                                    <input type="text" name="" id="" placeholder="subjct" required>
                                </div>
                                <div class="field area">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Describe Project" required></textarea>   
                                </div>
                            </form>
                        </div>
                        <div class="button">
                            <button type="submit">Send massege</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    
</body>
</html>
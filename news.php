<!DOCTYPE html>
<html >
<head>
    <!--footer-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">

/*زر الاسم */
/* Set a style for all buttons */
.lacarte button {
  background-color: #67cca5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: -3% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%; /* Could be more or less, depending on screen size */
}






/*عرض الصور */
/*بوكس الفهوةو الاكل*/
.text0{
        width :280px;
        height : 100px;
        background-color :#67cca5;
        color : white;
        margin-top: 50px;
        margin-left: 600px;
        text-align: center;
        font-size :40px;
        border-radius:10px;

      }

      p{
        animation : shadow 3s ease-in-out infinite
      }
      @keyframes shadow {
        0% { text-shadow: 5px 2px 3px #222}
        50%{ text-shadow: -5px 2px 3px #222 }
        100%{ text-shadow: 5px 2px 3px #222}
      }
      .text1{
        width :280px;
        height : 100px;
        background-color :#67cca5;
        color : white;
        margin-top: 120px;
        margin-left: 600px;
        text-align: center;
        font-size :40px;
        border-radius:10px;

      }
.slidershow{
  width: 700px;
  height: 400px;
  overflow: hidden;
  margin-top: 90px;
}
.middle{
  position: relative;
  top: 190px;
  left: 50%;
  transform: translate(-50%,-50%);
}
.navigation{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}
.bar{
  width: 50px;
  height: 10px;
  border: 2px solid #404040;
  margin: 6px;
  cursor: pointer;
  transition: 0.4s;
}
.bar:hover{
  background: white;
  
}

input[name="r"]{
    position: absolute;
    visibility: hidden;
}

.slides{
  width: 500%;
  height: 100%;
  display: flex;
}

.slide{
  width: 20%;
  transition: 0.6s;
}
.slide img{
  width: 700px;
  height: 410px;
}

#r1:checked ~ .s1{
  margin-left: 0;
}
#r2:checked ~ .s1{
  margin-left: -20%;
}
#r3:checked ~ .s1{
  margin-left: -40%;
}
#r4:checked ~ .s1{
  margin-left: -60%;
}
#r5:checked ~ .s1{
  margin-left: -80%;
}
#r6:checked ~ .s1{
  margin-left: -100%;
}
#r7:checked ~ .s1{
  margin-left: -120%;
}
#r8:checked ~ .s1{
  margin-left: -140%;
}

#r9:checked ~ .s1{
  margin-left: -160%;
}






.slidershow0{
  width: 700px;
  height: 400px;
  overflow: hidden;
  margin-top: 90px;
}
.middle0{
  position: relative;
  top: 190px;
  left: 50%;
  transform: translate(-50%,-50%);
}
.navigation0{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}
.bar0{
  width: 50px;
  height: 10px;
  border: 2px solid #404040;
  margin: 6px;
  cursor: pointer;
  transition: 0.4s;
}
.bar0:hover{
  background: white;
  
}

input[name="a"]{
    position: absolute;
    visibility: hidden;
}

.slides0{
  width: 500%;
  height: 100%;
  display: flex;
}

.slide1{
  width: 20%;
  transition: 0.6s;
}
.slide1 img{
  width: 700px;
  height: 410px;
}

#a1:checked ~ .s2{
  margin-left: 0;
}
#a2:checked ~ .s2{
  margin-left: -20%;
}
#a3:checked ~ .s2{
  margin-left: -40%;
}
#a4:checked ~ .s2{
  margin-left: -60%;
}
#a5:checked ~ .s2{
  margin-left: -80%;
}
#a6:checked ~ .s2{
  margin-left: -100%;
}
#a7:checked ~ .s2{
  margin-left: -120%;
}
#a8:checked ~ .s2{
  margin-left: -140%;
}

#a9:checked ~ .s2{
  margin-left: -160%;
}
#a10:checked ~ .s2{
  margin-left: -160%;
}
 
  
    /*footer*/
    .footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
  width: 1521px;
  height: 250px;
 
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
  background-color:#282d32;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:right;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  text-align:center;
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}



</style>
</head>



<body>
  <!--الشعار -->
<!-- header-->
<header>
  <div class="imaglog">
    <nav class="navbar navbar-expand-md no-gutters">
      <div class="col-2 text-left">
          <img src="logo.jpeg" alt="" width="200" height="156"  class="center"/>
      </div>


 <!--مربع الاسم -->
 <div class="lacarte">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:150px ; height:60px ;margin-left:380px ; margin-top:0px ; border-radius:10px ;"><h4>LA CARTE</h4></button>
      <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content">
  <div class="container">
     <h1 style="color:#67cca5;">CARTE ...</h1>
      <h3>Is a free web site that helps you to order food and drink and know the offers in each college . A web site that helps you in your daily life . Our goal is to help all universities in Saudi Arabia and become No.1 as the highest web site . </h3>
  </div>
  </form>
</div>    
      <script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
      </div>

<div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar" aria-controls="navbarNav6" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div  class="collapse navbar-collapse justify-content-center ">
        <ul style="background-color: white; margin-left:350px" class="navbar-nav justify-content-center">
            <a  style="color: gray;" class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a  style="color: #404040;"class="nav-link" href="#">Menu</a>
          </li>     
          <li class="nav-item">
            <a style="color:gray;" class="nav-link" href="contactus.php">Contact Us</a>
          </li>
               
          <li class="nav-item">
            <a  style="color: #404040;"class="nav-link" href="#">About Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
</header>
<hr style="margin-top: 10px; border-width: 6px; border-color: #404040;display: block;"/>



<!--الصور -->
<div class="text0">
  <p> FOR COFFEE</p>
</div>
<div class="slidershow middle">
<div class="slides">
  <input type="radio" name="r" id="r1" checked>
  <input type="radio" name="r" id="r2">
  <input type="radio" name="r" id="r3">
  <input type="radio" name="r" id="r4">
  <input type="radio" name="r" id="r5">
  <input type="radio" name="r" id="r6">
  <input type="radio" name="r" id="r7">
  <input type="radio" name="r" id="r8">
  <input type="radio" name="r" id="r9">
 
  <div class="slide s1">
    <img src="c1.jpg" alt="">
  </div>
  <div class="slide">
    <img src="c2.jpg" alt="">
  </div>
  <div class="slide">
    <img src="c3.jpg" alt="">
  </div>
  <div class="slide">
    <img src="c4.jpg" alt="">
  </div>
  <div class="slide">
    <img src="c5.jpg" alt="">
  </div>
  <div class="slide">
    <img src="c6.jpg" alt="">
  </div>
  <div class="slide">
    <img src="c7.jpg" alt="">
  </div>
  <div class="slide">
    <img src="c8.jpg" alt="">
  </div>
  <div class="slide">
    <img src="c9.jpg" alt="">
  </div>

</div>
<div class="navigation">
  <label for="r1" class="bar"></label>
  <label for="r2" class="bar"></label>
  <label for="r3" class="bar"></label>
  <label for="r4" class="bar"></label>
  <label for="r5" class="bar"></label>
  <label for="r6" class="bar"></label>
  <label for="r7" class="bar"></label>
  <label for="r8" class="bar"></label>
  <label for="r9" class="bar"></label>

</div>
</div>





<div class="text1">
  <p> FOR FOOD</p>
</div>
<div class="slidershow0 middle0">
<div class="slides0">
  <input type="radio" name="a" id="a1" checked>
  <input type="radio" name="a" id="a2">
  <input type="radio" name="a" id="a3">
  <input type="radio" name="a" id="a4">
  <input type="radio" name="a" id="a5">
  <input type="radio" name="a" id="a6">
  <input type="radio" name="a" id="a7">
  <input type="radio" name="a" id="a8">
  <input type="radio" name="a" id="a9">
  <input type="radio" name="a" id="a10">
  <div class="slide1 s2">
    <img src="f1.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f2.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f3.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f4.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f5.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f6.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f7.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f8.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f9.jpg" alt="">
  </div>
  <div class="slide1">
    <img src="f10.jpg" alt="">
  </div>
</div>

<div class="navigation0">
  <label for="a1" class="bar0"></label>
  <label for="a2" class="bar0"></label>
  <label for="a3" class="bar0"></label>
  <label for="a4" class="bar0"></label>
  <label for="a5" class="bar0"></label>
  <label for="a6" class="bar0"></label>
  <label for="a7" class="bar0"></label>
  <label for="a8" class="bar0"></label>
  <label for="a9" class="bar0"></label>
  <label for="a10" class="bar0"></label>
</div>
</div>





<!--footer-->
<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div >
                        <ul>
                        <li><h6> LA CARTE</h6></li>
                        <li><a href="home.php">Home</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
                            <li><a href="#">About Us</a></li>
  
                        </ul>
                    </div>

                    <div class="col item social">
                    <a href="#"><i class="icon ion-social-facebook"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="#"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <p class="copyright">Copyright © La Crate. All rights reserved.</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>





</body>
</html>

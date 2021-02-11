<!DOCTYPE html>
<html >
<head>
    <!--footer-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">

.slidershow{
  width: 700px;
  height: 400px;
  overflow: hidden;
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
#r10:checked ~ .s1{
  margin-left: -180%;
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

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-1" aria-controls="navbarNav6" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div  class="collapse navbar-collapse justify-content-center col-md-8 navbar-collapse-1">
        <ul style="background-color: white;" class="navbar-nav justify-content-center">
        <li class="nav-item active">
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
</header>
<hr style="margin-top: 10px; border-width: 6px; border-color: #404040;display: block;"/>



<!--الصور -->
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
  <input type="radio" name="r" id="r10">
  <div class="slide s1">
    <img src="img1.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img2.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img3.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img4.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img5.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img6.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img7.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img8.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img9.jpg" alt="">
  </div>
  <div class="slide">
    <img src="img10.jpg" alt="">
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
  <label for="r10" class="bar"></label>
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

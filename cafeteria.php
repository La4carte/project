<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--footer-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<!--زر تسجيل الدخول -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style type="text/css">

/*زر التسجيل ومربع التسجيل  */
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password]  , input[type=UniversityID], input[type=Phone]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #67cca5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}




/*footer*/
.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
  width: 1550px;
  height: 290px;
  margin-top:60px;
 
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
      <h5 style="width:150px ; height:60px ;margin-left:380px ; margin-top:0px ; border-radius:10px ; background-color: #67cca5; color: white; padding: 14px 25px; border: none;
  ">LA CARTE</h5> 
      </div>

      <div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar" aria-controls="navbarNav6" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div  class="collapse navbar-collapse justify-content-center ">
        <ul style="background-color: white; margin-left:350px" class="navbar-nav justify-content-center">
        <li class="nav-item active">
            <a  style="color: gray;" class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a  style="color: #404040;"class="nav-link" href="#">Menu</a>
          </li> 
          <li class="nav-item">
            <a  style="color:gray ;"class="nav-link" href="news.php">News</a>
          </li>     
          <li class="nav-item">
            <a style="color:#404040;" class="nav-link" href="contactus.php">Contact Us</a>
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
<hr style="margin-top: 10px;  display: block;  border-width: 6px;  border-color: black;" />


<!--زر تسجيل الدخول -->
  
<div class="container">
<form name="myform" action="cafdata.php" method="POST">

CAFETERIAID<input class="form-control" type="text" placeholder="Enter  cafeteriaid" name="CAFETERIAID" required/>
<br>

Password :<input class="form-control"  type="password" name="PASSWORD" placeholder="Enter Password" required/>
<br>
<button  class="btn" style="background-color:#67cca5 ;color:white; width:160 ; height:60; border-radius:10px ;" value="Check In" name="Submit" onclick= "validate()"> Login </button></a>
</form>
<script>
var count = 2;
function validate() {
var un = document.myform.CAFETERIAID.value;
var pw = document.myform.PASSWORD.value;
var valid = false;
var unArray = ["caf018", "caf019"];  // as many as you like - no comma after final entry
var pwArray = ["MFHEEA", "AEEHFM"];  // the corresponding passwords;
for (var i=0; i <unArray.length; i++) {
if ((un == unArray[i]) && (pw == pwArray[i])) {
valid = true;
break;
}
}
if (valid) {
alert ("Login was successful");
return false;
}
var t = " tries";
if (count == 1) {t = " try"}
if (count >= 1) {
alert ("Invalid CAFETERIAID and/or password.  You have " + count + t + " left.");
document.myform.CAFETERIAID.value = "";
document.myform.PASSWORD.value = "";
setTimeout("document.myform.CAFETERIAID.focus()", 25);
setTimeout("document.myform.CAFETERIAID.select()", 25);
count --;
}
else {
alert ("Still incorrect! You have no more tries left!");
document.myform.CAFETERIAID.value = "No more tries allowed!";
document.myform.PASSWORD.value = "";
document.myform.CAFETERIAID.disabled = true;
document.myform.PASSWORD.disabled = true;
return false;
}
}
</script>
</div>
</form>
</div>




<!--footer-->
<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-4 item">
                        <ul>
                          <li><h6> LA CARTE</h6></li>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="news.php">New</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
                          

                            


                        </ul>
                    </div>

                    <div class="col item social">
                    <a href="#"><i class="icon ion-social-facebook"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Copyright © La Crate. All rights reserved.</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


</body>
 </html>
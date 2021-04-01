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
<form   action="logchekemp.php" method="POST">

Employee ID :<input  type="text" pattern="[0-9]{9}"placeholder="Enter Employee ID" name="EMPLOEEYID" required/>
<br>
Password :	<input text="password" type="password" name="PASSWORD" pattern="(?=.[a-z])(?=.*[A-Z]).{4,8}"placeholder="Enter Password" onsubmit="return checkForm(this)" value="" id="myInput" required/>
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<br>
<button class="btn" style="background-color:#67cca5 ;color:white; width:150 ; height:60; border-radius:10px ;"  type="submit" name="login"  > Login </button>
</form>
</div>



<!--زر التسجيل -->
<h5 style="margin-left: 980px; margin-top:-100px;">Don't have an account? </h5>
<button onclick="document.getElementById('id01').style.display='block'" style="width:150px ; height:60px ;margin-left:1200px ; margin-top:-50px ; border-radius:10px ;"><h6>Sign up now</h6></button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="empregdata.php"method="post">
    <div class="container">
    <h1>Sign up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  <label id="icon" for="name"></label>
Username  <input type="text" name="USERNAME" id="name" placeholder="Enter  username " pattern="(?=.[a-z])(?=.*[A-Z]).{4,8}" required/>
  <label id="icon" for="name"></label>
Employee ID <input type="UniversityID" name="EMPLOEEYID" pattern="[0-9]{9}"id="name" placeholder="Enter Employee ID" required/>
  <label id="icon" for="name"></label>
Password  <input type="password" name="PASSWORD"pattern="(?=.[a-z])(?=.*[A-Z]).{4,8}" placeholder="Enter password" required/>
<label id="icon" for="name"></label>
Email  <input type="text" name="EMAIL" id="name"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter  Email" required/>
  <label id="icon" for="name"></label>
Phone  <input type="Phone" name="PHONE" id="name" pattern="[0-9]{10}" placeholder="Enter  phone for example(05xxxxxxxx)" required/>
<label id="icon" for="name"></label>
Office number  <input type="text" name="OFFICENUM" id="name"pattern="{4,18}" placeholder="Enter Office number " required/>
      <div class="clearfix">
        <button type="submit"> Sign Up</button>
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
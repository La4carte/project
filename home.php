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


/*student image-ايقونة الطالب*/

.stuloginimg
{
  margin-top:450px;
margin-left: 1000px;
}

.studentimage h3 
{
  margin-top:-50px;
margin-left: 880px;
color: gray ;
}

.studentimage h3 a
{
color: gray ;
}

/*employee image-ايقونة الموظف*/
.emploginimg
{
  margin-top:-75px;
margin-left:500px;
}
.employeeimage h3
{
  margin-top:-50px;
margin-left: 340px;

}
.employeeimage h3 a
{

color:gray;
}




/*admin image- ايقونة الادمن */
.admimg
{
  margin-top:100px;
margin-left: 800px;
color:#404040; 
}
.adminimage h5
{
  margin-top:-30px;
margin-left: 720px;
color:#404040;
}
.adminimage h5 a
{

color:#404040;
}



/*cafetrai image- ايقونة الكافتيريا*/
.cafimg
{
  margin-top:-56px;
margin-left: 650px; 
}
.cafeteriaimage h5
{
  margin-top:-30px;
margin-left: 550px;
}

.cafeteriaimage h5 a
{
  color:#404040;

}



/*image-صورة العرض*/
.image
{
  position:absolute;
  width:80% ;

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




  
<!-- header-->
<header>

<!--الشعار -->
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


<!--القائمة-->
      <div> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar" aria-controls="navbarNav6" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div  class="collapse navbar-collapse justify-content-center ">
        <ul style="background-color: white; margin-left:350px" class="navbar-nav justify-content-center">
          <li class="nav-item active">
            <a  style="color: gray;" class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a  style="color: #404040;"class="nav-link" href="news.php">News</a>
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

<!-- صورة العرض-->
<div class="image">
  <img src="image1.jpeg" alt="" style="width:1505px ;height:370px ; margin-top:5px ; margin-left:8.5px"/>       
</div>



<!-- ايقونات الطالب والموظف-->
<div class="studentimage">
  <div class="stuloginimg">
<img src="stud.jpg" alt="" width="90" height="90"/>
</div>
<h3><a href="log-stud.php">Student</a></h3>
</div>

<div class="employeeimage">
  <div class="emploginimg">
<img src="emplo.jpg" alt="" width="90" height="90"/>
</div>
<h3><a href="log-emp.php">Employee</a></h3>
</div>



<!--ايقونات الادمن والكافتيريا-->
<div class="adminimage">
  <div class="admimg">
  <img src="admin.jpg" alt="" width="55" height="55"/>
  </div>
  <h5><a href="admin.php" >Admin</a></h5>
</div>


<div class="cafeteriaimage">
  <div class="cafimg">
  <img src="caf.jpg" alt="" width="55" height="55"/>
  </div>
  <h5><a href="cafeteria.php" >Cafeteria</a></h5>
</div>




<!--footer-->
<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div >
                        <ul>
                          <li><h6> LA CARTE</h6></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="news.php">News</a></li>
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

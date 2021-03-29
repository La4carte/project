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



  /* البوكس*/ 
  .containerbox {
      width: 90%;
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color:#67cca5;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    .containerbox h1{
      margin-left: 125px;
      color:white;
    }
    .containerbox h5{
      color:black;
      margin-left: 20px;
    }

    .form-group {
      width: 100%;
      margin-top: 20px;
      font-size: 20px;
      color:white;
      margin-left: 5px;
    }
    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 5px;
      font-size: 18px;
      border: 1px solid rgba(128, 128, 128, 0.199);
      margin-top: 5px;
    }

    textarea {
      resize: vertical;
    }
    button[type="submit"] {
      width: 100%;
      border: none;
      outline: none;
      padding: 20px;
      font-size: 24px;
      border-radius: 8px;
      font-family: "Montserrat";
      color: #67cca5;
      text-align: center;
      cursor: pointer;
      margin-top: 10px;
      transition: 0.3s ease background-color;
    }
    button[type="submit"]:hover {
      background-color: rgb(214, 226, 236);
    }

    #status {
      width: 90%;
      max-width: 500px;
      text-align: center;
      padding: 10px;
      margin: 0 auto;
      border-radius: 8px;
    }
    #status.success {
      background-color: rgb(211, 250, 153);
      animation: status 4s ease forwards;
    }
    #status.error {
      background-color: rgb(250, 129, 92);
      color: white;
      animation: status 4s ease forwards;
    }
    @keyframes status {
      0% {
        opacity: 1;
        pointer-events: all;
      }
      90% {
        opacity: 1;
        pointer-events: all;
      }
      100% {
        opacity: 0;
        pointer-events: none;
      }
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






<script type="text/javascript">
    window.addEventListener("DOMContentLoaded", function () {
  // get the form elements defined in your form HTML above

  var form = document.getElementById("my-form");
  // var button = document.getElementById("my-form-button");
  var status = document.getElementById("status");

  // Success and Error functions for after the form is submitted

  function success() {
    form.reset();
    status.classList.add("success");
    status.innerHTML = "Thanks!";
  }

  function error() {
    status.classList.add("error");
    status.innerHTML = "Oops! There was a problem.";
  }

  // handle the form submission event

  form.addEventListener("submit", function (ev) {
    ev.preventDefault();
    var data = new FormData(form);
    ajax(form.method, form.action, data, success, error);
  });
});

// helper function for sending an AJAX request

function ajax(method, url, data, success, error) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState !== XMLHttpRequest.DONE) return;
    if (xhr.status === 200) {
      success(xhr.response, xhr.responseType);
    } else {
      error(xhr.status, xhr.response, xhr.responseType);
    }
  };
  xhr.send(data);
}
</script>
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
      <div class="lacarte">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:150px ; height:60px ;margin-left:380px ; margin-top:0px ; border-radius:10px ;"><h4>LA CARTE</h4></button>
      <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="datastudreg.php" method="post">
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-1" aria-controls="navbarNav6" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div  class="collapse navbar-collapse justify-content-center col-md-8 navbar-collapse-1">
        <ul style="background-color: white; margin-left:120px" class="navbar-nav justify-content-center">
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
            <a  style="color: #404040;"class="nav-link" href="#">About Us</a>
          </li>
          </li>

        </ul>
      </div>
    </nav>
  </div>
</header>
<hr style="margin-top: 10px; border-width: 6px; border-color: #404040;display: block;"/>




<!--البوكس-->
    <div class="containerbox">
      <h1> Contact Us</h1>
      <h5> Do you have any questions? please do not hesitate to contact us directly.
        Our team will come back to you within a matter of hours to help you. </h5>
      <form action="contadata.php" id="my-form"method="post">

        <div class="form-group">
          <label for="sname">Username</label>
           <input type="text" name="USERNAME" id="firstname"placeholder="Enter  username ">
        </div>

        <div class="form-group">
          <label for="sname">Email</label>
           <input type="email" name="EMAIL" id="Email" placeholder="Enter email ">
        </div>

        <div class="form-group">
          <label for="sname">University ID</label>
           <input type="text" name="UNIVERSITYID" id="University ID"placeholder="Enter University ID ">
        </div>

        <div class="form-group">
          <label for="massage">Massage</label>
          <textarea name="MASSAGE" id="massage" cols="30" rows="3"placeholder="Enter massage "></textarea>
        </div>

        <button type="submit">Send</button>
      </form>
    </div>
    <div id="status"></div>





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
                            <li><a href="news.php">New</a></li>
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

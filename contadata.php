<?php		
  
    $USERNAME = $_POST["USERNAME"];
    $EMAIL = $_POST["EMAIL"];
    $UNIVERSITYID = $_POST["UNIVERSITYID"];
    $MASSAGE = $_POST["MASSAGE"];
$con = mysqli_connect("localhost","root","") or die("Erorr:can't connect to server");

$db = mysqli_select_db($con,"carte")  or die("Erorr:can't connect to database");
$insertcontact = "INSERT INTO contact (USERNAME,EMAIL,UNIVERSITYID,MASSAGE) value ('$USERNAME','$EMAIL','$UNIVERSITYID','$MASSAGE')";
$result = mysqli_query($con,$insertcontact);
  ?>
  
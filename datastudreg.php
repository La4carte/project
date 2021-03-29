<?PHP
$USERNAME = $_POST["USERNAME"];
$STUDENTID = $_POST["STUDENTID"];
$PASSWORD = $_POST["PASSWORD"];
$EMAIL = $_POST["EMAIL"];
$PHONE = $_POST["PHONE"];


$con = mysqli_connect("localhost","root","") or die("Erorr:can't connect to server");

$db = mysqli_select_db($con,"la carte")  or die("Erorr:can't connect to database");
$insertstudentreg = "INSERT INTO Student_information (USERNAME,STUDENTID,PASSWORD,EMAIL,PHONE) value ('$USERNAME','$STUDENTID','$PASSWORD','$EMAIL','$PHONE')";
$result = mysqli_query($con,$insertstudentreg);
if($result)
{
    include('log-stud.php');
}



else
{
    die("erorr:".mysqli_errno($con));
}

 ?>